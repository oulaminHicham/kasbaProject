<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservaton;
use App\Models\Stripe;
use Illuminate\Http\Request;

class PayementController extends Controller
{

    public function index(Request $req){
        $numOfPersan = $req->nbrPersonne ;
        $nombreDeJour = $req->nbrJour ;
        $price = $req->price ;
        $suite_id = $req->suite_id ;
        return view('Clientreservation.card' , compact('nombreDeJour' , 'price' , 'numOfPersan' ,'suite_id' ));
    }

    public function stripe(Request $request){
        $key =Stripe::all();
        $sk_key = $key[0]->stipe_key;
        $stripe = new \Stripe\StripeClient($sk_key) ;
        $checkout_session = $stripe->checkout->sessions->create([
        'line_items' => [[
            'price_data' => [
            'currency' => 'usd',
            'product_data' => [
                'name' => 'suite',

            ],
            'unit_amount' => $request->price * 100,
            ],
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => route('success' , [] ,true).'?session_id=(CHECKOUT_SESSION_ID)',
        'cancel_url' => route('cancel' , [] , true),
        ]);
        
        if(isset($checkout_session->id) && $checkout_session->id !== ''){
            session()->put("suite_id" , $request->suite_id) ;
            session()->put("fullName" , $request->fullName) ;
            session()->put("email" , $request->email) ;
            session()->put("details" , $request->details) ;
            session()->put("price" , $request->price) ;
            return redirect($checkout_session->url);
       }
    }

    public function success(Request $request){
        if(isset($request->session_id)){
            $reservation = new Reservaton() ;
            $reservation ->fullName = session()->get('fullName');
            $reservation ->email =  session()->get('email');
            $reservation ->details =  session()->get('details');
            $reservation ->price = session()->get('price');
            $reservation ->date_arive = session()->get('date_arive');
            $reservation ->date_depart = session()->get('date_depart');
            $reservation ->suite_id = session()->get('suite_id');
            $reservation ->save();
            session()->forget('fullName');
            session()->forget('email');
            session()->forget('details');
            session()->forget('date_arive');
            session()->forget('date_depart');
            return redirect()->route('reservation')->with('success'  , 'reservation successfoly maded');
        }
        else{
            return redirect()->route('cancel');
        }
    }

    public function casncel(){
        return redirect()->route('reservation')->with('error' , 'reservation feild ther is some problem!') ;
    }
    
}


