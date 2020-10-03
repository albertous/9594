<?php

namespace App\Http\Controllers;

use GoogleMaps\GoogleMaps;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        return \GoogleMaps::load('geocoding')
		->setParam (['address' =>'santa cruz'])
 		->get();
    }
}
