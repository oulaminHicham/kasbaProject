<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Suite;
use Illuminate\Http\Request;

class Clientreservation extends Controller
{
    public function index(){
        $suites = Suite::all();
        return view('Clientreservation.index' , compact('suites'));
    }
}
