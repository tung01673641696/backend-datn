<?php

namespace App\Http\Controllers;
use App\Models\House;

use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function countHouseByOwner() {
        $user = auth()->user();
        dd($user);
        $houseCount = $user->houses()->count();
    }

    public function getHouseByOwner($userId) {
        $houses = House::where('user_id', $userId)->with(['district', 'ward'])->get();
        return $houses;
    }

    public function addHouse(Request $request) {
        $house = House::create([
        'name' => $request->name,
        'address'=> $request-> address,
        'user_id' => $request-> user_id,
        'district_id' => $request->district_id,
        'ward_id' => $request-> ward_id,
        ]);

        return response()->json(['message' => 'Thêm nhà thành công', 'house' => $house], 200);
    }

    public function getOneHouse($houseId) {
        $house = House::where('id', $houseId)->first();

        if(!$house) {
            return response()->json(['message' => 'Không tìm thấy nhà'], 404);
        }
        return response()->json($house);

    }

    // public function editHouse(Request $request, $id) {
    //     $house = House::find($id);
    //     dd($house);
    //     $house->update([
    //         'name' => $request->name,
    //         'address'=> $request-> address,
    //         'user_id' => $request-> user_id,
    //         'district_id' => $request->district_id,
    //         'ward_id' => $request-> ward_id,
    //     ]);
    //     return reponse()->json(['message'=> "Cập nhật nhà thành công", 'house'=>$house]);
    // }
}
