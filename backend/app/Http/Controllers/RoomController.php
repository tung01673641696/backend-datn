<?php

namespace App\Http\Controllers;
use App\Models\Room;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function getRoomByHouse($houseId) {
        $rooms = Room::where('house_id', $houseId)->get();
        return $rooms;
    }

    public function addRoom(Request $request) {
        $exists = Room::where('house_id', $request->house_id)
        ->where('name', $request->name)
        ->exists();

        if ($exists) {
        return response()->json([
            'status' => 'error',
            'message' => 'Phòng này đã tồn tại trong nhà'], 201);
        }

        $room = Room::create([
            'house_id' => $request-> house_id,
            'room_type' => $request-> room_type,
            'name'=> $request-> name,
            'floor'=> $request-> floor,
            'price'=> $request-> price,
            'price_deposit'=> $request-> price_deposit,
            'area'=> $request-> area,
            'user_number'=> $request-> user_number,
            'image'=> json_encode($request-> image),
            'description'=> $request-> description,
            'is_available'=> $request-> is_available
        ]);

        return response()->json(['message' => 'Thêm phòng thành công', 'room' => $room], 200);
    }
}
