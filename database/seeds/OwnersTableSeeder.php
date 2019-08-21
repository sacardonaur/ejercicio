<?php

use Illuminate\Database\Seeder;
use App\Owner;

class OwnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner = new Owner();
        $owner->name = 'Juan Gabriel';
        $owner->cc = 123456789;

        $owner->save();
    }
}
