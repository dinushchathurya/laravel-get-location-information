<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        $ip = '103.239.157.189'; //For static IP address get
        //$ip = request()->ip(); //Dynamic IP address get
        $ip = request()->header('X-Forwarded-For');
        $data = \Location::get($ip);   
        dd($data);
    }

    public function test()
    {
        if ($position = Location::get()) {
            dd($position);
        } else {
            // Failed retrieving position.
        }

    }
}
