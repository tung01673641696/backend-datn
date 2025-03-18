<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ward;

class WardController extends Controller
{
    public function getWardsByDistrict($district_id) {
        $wards = Ward::where('district_id', $district_id)->get();   
        return response()->json($wards);
    }
}
