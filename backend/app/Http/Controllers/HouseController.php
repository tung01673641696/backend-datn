<?php

namespace App\Http\Controllers;
use App\Models\House;

use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function getHouseByOwner($userId) {
        $houses = House::where('user_id', $userId)->with(['district', 'ward'])->get();
        return $houses;
    }
}
