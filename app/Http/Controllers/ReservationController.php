<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservaton;
use App\Models\Suite;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservaton::all();
        return view('reservations.index' , compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suites = Suite::all();
        return view("reservations.create"  , compact('suites'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "fullName" =>["required" , "string" , "max:30" , ] , 
            "email" =>["required" , 'string'  ] , 
            "price" =>["required" , 'string'  ] , 
            "details" =>["required" , 'string' , 'max:1000'] , 
            "suite_id" =>["required" , 'integer'] , 

        ]);
        Reservaton::create($request->all());
        return to_route("reservations.index");
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
        $reservation  = Reservaton::find($id);
        $suites = Suite::all();
        return view('reservations.edit' , compact('reservation' , "suites"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "fullName" =>["required" , "string" , "max:30" , ] , 
            "email" =>["required" , 'string'  ] , 
            "price" =>["required" , 'string'  ] , 
            "details" =>["required" , 'string' , 'max:1000'] , 
            "suite_id" =>["required" , 'integer'] , 
        ]);
        $reservation =  Reservaton::find($id);
        $reservation ->update($request->all());
        return to_route("reservations.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reservation = Reservaton::find($id);
        $reservation ->delete();
        return to_route("reservations.index");
    }
}
