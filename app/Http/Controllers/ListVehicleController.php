<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

class ListVehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();
        return view("listVehicles", compact('vehicles'));
    }

}
