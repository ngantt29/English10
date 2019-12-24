<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unit;

class UnitsController extends Controller
{
    //
    function getUnits(){
        $unit = Unit::paginate(8);
    	return view('pages.units',['units'=>$unit]);
    }
}
