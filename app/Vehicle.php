<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'plate', 'brand', "owner"
    ];

    public function owner()
    {
        return $this->belongsTo('App\Owner', 'cc', 'owner');
    }
}
