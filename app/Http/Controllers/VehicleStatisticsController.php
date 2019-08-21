<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

class VehicleStatisticsController extends Controller
{
    public function index()
    {
        $mazdaCount = count(Vehicle::where('brand', '=', 'Mazda')->get());
        $toyotaCount = count(Vehicle::where('brand', '=', 'Toyota')->get());
        $chevroletCount = count(Vehicle::where('brand', '=', 'Chevrolet')->get());
        $vehiclesCount = [$mazdaCount, $toyotaCount, $chevroletCount];

        return view("vehicleStatistics", compact('vehiclesCount'));
    }
}
