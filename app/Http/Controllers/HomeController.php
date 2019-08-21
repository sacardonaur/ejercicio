<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class HomeController extends Controller
{
    public function home()
    {
        return view("startZone");
    }

}
