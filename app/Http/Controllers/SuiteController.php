<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Suite;
use Illuminate\Http\Request;

class SuiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suites = Suite::all();
        return view('suites.index' , compact('suites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suites.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "description" =>["required" , "string" , "min:10"] , 
            "avantages" =>["required"   , 'string'], 
            "classification" =>["required" , 'string'] , 
            "prix" =>["required" ] , 
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            "num_persan"=>['required' , 'integer']

        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Suite::create([
            "description"=>$request->description ,
            "avantages"=> array_map('trim', explode(',', $request->avantages)) ,
            "classification"=>$request->classification ,
            "prix"=>$request->prix ,
            "image"=>"images/$imageName" ,
            "num_persan"=>$request->num_persan ,
        ]);
        return to_route("suites.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $suite = Suite::find($id);
        return view('suites.show' , compact('suite'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $suite = Suite::find($id);
        return view('suites.edit'  , compact('suite'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "description" =>["required" , "string" , "min:10"] , 
            "avantages" =>["required"   , 'string'], 
            "classification" =>["required" , 'string'] , 
            "prix" =>["required" ] , 

        ]);
        $request['avantages'] = array_map('trim', explode(',', $request->avantages));
        $suite = Suite::find($id);
        $suite->update($request->all());
        return to_route("suites.index");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $suite = Suite::find($id);
        $suite-> delete();
        return to_route("suites.index");

    }
}
