<?php

use Illuminate\Database\Seeder;
use App\Vehicle;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicle = new Vehicle();
        $vehicle->brand = 'Mazda';
        $vehicle->plate = 'ASD345';
        $vehicle->belongsTo('Owner', 123456789,);
        return $this->belongsTo('App\User', 123456789,);


        $vehicle->save();
    }
}
