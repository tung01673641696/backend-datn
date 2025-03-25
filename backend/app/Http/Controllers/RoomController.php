<?php

namespace App\Http\Controllers;
use App\Models\Room;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function getRoomByHouse($houseId) {
        $rooms = Room::where('house_id', $houseId)->get();
        dd($rooms);
        return $rooms;
    }
}
