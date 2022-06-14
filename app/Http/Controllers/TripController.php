<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class TripController extends Controller
{
    //
    public function index(){
        $trips = Trip::all();
        return view('trips', compact('trips'));
        
    }
    public function show(){
        $trip = Trip::findOrFail();
        return view('trip', compact('trips'));
    }
}
