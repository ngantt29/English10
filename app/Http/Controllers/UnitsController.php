<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;

class UnitsController extends Controller
{
    //
    function getUnits(){
        $unit = Unit::all();
    	return view('pages.units',['units'=>$unit]);
    }
}
