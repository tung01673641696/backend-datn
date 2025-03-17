<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;

class DistrictController extends Controller
{
    public function showDistrict() {
       
        $districts = District::all();
        return response()->json($districts);
    }
}
