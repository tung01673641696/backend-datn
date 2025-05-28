<?php

namespace App\Http\Controllers;
use App\Models\Room;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function getRoomHouse($houseId) {
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
            'description'=> $request->description,
            'is_available'=> $request->is_available
        ]);

        return response()->json(['message' => 'Thêm phòng thành công', 'room' => $room], 200);
    }

    public function showRoom($roomId) {
        $room = Room::with('house')->find($roomId);
        if(!$room) {
            return response()->json(['message'=>'Phòng không tồn tại'], 404);
        }
        return response()->json([
            'id' => $room->id,
            'name' => $room->name,
            'room_type' => $room->room_type,
            'floor' => $room->floor,
            'price' => $room->price,
            'price_deposit' => $room->price_deposit,
            'area' => $room->area,
            'user_number' => $room->user_number,
            'image' => $room->image,
            'description' => $room->description,
            'is_available' => $room->is_available,
            'house_id' => $room->house_id,
            'house_name' => $room->house->name ?? null

        ], 200);
    }

    public function updateRoom(Request $request, $roomId) {
        $room = Room::find($roomId);

        if(!$room) {
            return response()->json(['message'=>'Không tìm thấy phòng'], 404);
        }

        $exists = Room::where('house_id', $room->house_id)
        ->where('name', $request->name)
        ->where('id', '!=', $roomId)
        ->exists();

        if ($exists) {
            return response()->json(['error' => 'Tên phòng đã tồn tại, vui lòng chọn tên khác'], 201);
        }

        $room->update([
            'house_id' => $request-> house_id,
            'room_type' => $request-> room_type,
            'name'=> $request-> name,
            'floor'=> $request-> floor,
            'price'=> $request-> price,
            'price_deposit'=> $request-> price_deposit,
            'area'=> $request-> area,
            'user_number'=> $request-> user_number,
            'image' => is_string($request->image) ? $request->image : json_encode($request->image),
            'description'=> $request-> description,
            'is_available'=> $request-> is_available
        ]);

        return response()->json(['message'=>'Cập nhật phòng thành công', 'room'=>$room], 200);
    }

    public function deleteRoom($roomId) {
        $room = Room::where('id', $roomId)->first();
        if(!$room) {
            return response()->json(['message' => 'Không tìm thấy phòng'], 404);
        }
        $room->delete();
        return response()->json(['message' => 'Xóa phòng thành công'], 200);
    }
}
