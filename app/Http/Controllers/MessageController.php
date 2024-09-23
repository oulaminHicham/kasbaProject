<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meassage;
class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Meassage::all();
        return view('messages.index' , compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required|email' , 
            'subject'=>'required|string',
            'message'=>'required|string'
        ]);
        Meassage::create($request->all());
        return to_route('welcome');
    }

    public function messages(){
        $messages = Meassage::all();
        return view('messages.index' , compact('messages'));
    }

    public function destroy(string $id){
        $message = Meassage::find($id);
        $message->delete();
        return to_route('contact.index');
    }
}
