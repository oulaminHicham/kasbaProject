<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Parametre;
use App\Models\Stripe;
use Illuminate\Http\Request;

class ParametreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parametres  = Parametre::all();
        $stripe = Stripe::all();
        return view('parametres.parametre' ,compact('parametres' , 'stripe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('parametres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                "lang"=>'string|unique:parametres,lang|required' ,
                'about_us'=>'required |string'
            ]
        );
        Parametre::create($request->all());
        return to_route('parametres.index');

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
        $parametre = Parametre::find($id);
        return view('parametres.editAbout' , compact('parametre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'lang'=>"required | string " ,
            "about_us"=>"required|string"
        ]);
        $parametre = Parametre::find($id);
        $parametre->update($request->all());
        return to_route('parametres.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $parametre = Parametre::find($id);
        $parametre ->delete();
        return to_route('parametres.index');

    }
}
