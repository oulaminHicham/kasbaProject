<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservaton;
use App\Models\Suite;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $numOfSuites = count(Suite::all());
        $numOfReservation = count(Reservaton::all());
        $reservations = Reservaton::all();
        return view('dashboard' , compact('numOfSuites' , 'numOfReservation' , 'reservations'));
    }
}
