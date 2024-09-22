<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Stripe;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stripe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'stipe_key'=>'required|string'
        ]);
        $stripe = new Stripe();
        $stripe->stipe_key = $request->stipe_key ;
        $stripe->save();
        return redirect('/parametres');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stripe = Stripe::find($id);
        $key_id = $stripe->id ;
        $key = $stripe->stipe_key ;
        return view('stripe.edit' , compact('key_id' , 'key'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'stipe_key'=>'required|string'
        ]);
        $stripe = Stripe::find($id);
        $stripe->update($request->all());
        return redirect('/parametres');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stripe = Stripe::find($id);
        $stripe->delete();
        return redirect('/parametres');

    }
}
