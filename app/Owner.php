<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = [
        'name', 'id'
    ];

    public function vehicle()
    {
        return $this->hasOne('App\Vehicle', 'owner', 'cc');
    }
}
