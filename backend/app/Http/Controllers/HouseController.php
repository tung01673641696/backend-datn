<?php

namespace App\Http\Controllers;
use App\Models\House;
use App\Models\User;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function hostCountHouse($userId) {
        $landlord = User::where('id', $userId)->where('role_id', 2)->first();
        
        if (!$landlord) {
            return response()->json(['message' => 'Chủ nhà không tồn tại'], 404);
        }
        $houseCount = House::where('user_id', $userId)->count();

        return response()->json(['house_count' => $houseCount]);
    }

    //tất cả nhà của chủ nhà
    public function getHouseHost($userId) {
        $houses = House::where('user_id', $userId)->with(['district', 'ward'])->get();
        return $houses;
    }

    public function addHouse(Request $request) {
        $exists = House::where('user_id', $request->user_id)
        ->where('name', $request->name)
        ->exists();

        if ($exists) {
            return response()->json(['error' => 'Nhà đã tồn tại'], 201);
        }

        $house = House::create([
        'name' => $request->name,
        'address'=> $request-> address,
        'user_id' => $request-> user_id,
        'district_id' => $request->district_id,
        'ward_id' => $request-> ward_id,
        ]);

        return response()->json(['message' => 'Thêm nhà thành công', 'house' => $house], 200);
    }

    public function showHouse($houseId) {
        $house = House::with(['district','ward'])->find($houseId);

        if(!$house) {
            return response()->json(['message' => 'Không tìm thấy nhà'], 404);
        }
        return response()->json($house);

    }

    public function updateHouse(Request $request, $houseId) {
        $house = House::find($houseId);

        if (!$house) {
            return response()->json(['message' => 'Không tìm thấy nhà'], 404);
        }

        $exists = House::where('user_id', $house->user_id)
        ->where('name', $request->name)
        ->where('id', '!=', $houseId)
        ->exists();

        if ($exists) {
            return response()->json(['error' => 'Tên nhà đã tồn tại, vui lòng chọn tên khác'], 201);
        }

        $house->update([
            'name' => $request->name,
            'address'=> $request-> address,
            'district_id' => $request->district_id,
            'ward_id' => $request-> ward_id,
        ]);
        return response()->json(['message'=> "Cập nhật nhà thành công", 'house'=>$house], 200);
    }

    public function deleteHouse($houseId) {
        $house = House::where('id', $houseId)->first();

        if(!$house) {
            return response()->json(['message' => 'Không tìm thấy nhà'], 404);
        }

        $house->delete();
        return response()->json(['message' => 'Xóa nhà thành công'], 200);
    }
}
