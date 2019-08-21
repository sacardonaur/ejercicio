<?php

namespace App\Http\Controllers;

use App\Owner;
use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterVehicleController extends Controller
{
    public function index()
    {
        return view("registerVehicle");
    }

    public function register(Request $request)
    {
        $data = $this->validate($request, [
            'brand' => Rule::in(['Mazda', 'Toyota', 'Chevrolet'])
        ]);

        $owner = new Owner([
            "name" => $request["name"],
            "cc" => $request["cc"]
        ]);
        $owner ->save();

        $vehicle = new Vehicle([
            "plate" => $request["plate"],
            "brand" => $request["brand"],
            "owner" => $request["cc"]
        ]);
        $vehicle->save();

        return redirect()->route('registerVehicleIndex')->with('successMessage','Vehiculo registrado exitosamente');
    }
}
