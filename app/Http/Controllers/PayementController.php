<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservaton;
use Illuminate\Http\Request;

class PayementController extends Controller
{

    public function index(){
        return view('Clientreservation.card');
    }

    public function stripe(Request $request){
        $stripe = new \Stripe\StripeClient(config('stripe.STRIPE_SK')) ;
        $checkout_session = $stripe->checkout->sessions->create([
        'line_items' => [[
            'price_data' => [
            'currency' => 'usd',
            'product_data' => [
                'name' => 'suite first class',

            ],
            'unit_amount' => 10 * 100,
            ],
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => route('success' , [] ,true).'?session_id=(CHECKOUT_SESSION_ID)',
        'cancel_url' => route('cancel' , [] , true),
        ]);
        
        if(isset($checkout_session->id) && $checkout_session->id !== ''){
            session()->put("fullName" , $request->fullName) ;
            session()->put("email" , $request->email) ;
            session()->put("details" , $request->details) ;
            return redirect($checkout_session->url);
       }
    }

    public function success(Request $request){
        if(isset($request->session_id)){
            $reservation = new Reservaton() ;
            $reservation ->fullName = session()->get('fullName');
            $reservation ->email =  session()->get('email');
            $reservation ->details =  session()->get('details');
            $reservation ->price = 10;
            $reservation ->suite_id = 1;
            $reservation ->save();
            session()->forget('fullName');
            session()->forget('email');
            session()->forget('details');
            return redirect()->route('card')->with('success'  , 'reservation successfoly maded');
        }
        else{
            return redirect()->route('cancel');
        }
    }

    public function casncel(){
        return redirect()->route('card')->with('error' , 'reservation feild ther is some problem!') ;
    }
    
}


