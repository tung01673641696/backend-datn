<?php

namespace App\Http\Controllers;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function addVehicle(Request $request) {
        $vehicle = Vehicle::create([
        'tenant_id' => $request->tenant_id,
        'type_vehicle'=> $request-> type_vehicle,
        'license_plate' => $request-> license_plate,
        'description' => $request->description,
        ]);

        return response()->json(['message' => 'Thêm phương tiện thành công', 'vehicle' => $vehicle], 200);
    }

    public function getAllVehicle() {
        $vehicles = Vehicle::with(['tenant.room.house'])->get()->map(function ($vehicle) {
            return [
                'id' => $vehicle->id,
                'type_vehicle' => $vehicle->type_vehicle,
                'license_plate' => $vehicle->license_plate,
                'description' => $vehicle->description,
                'tenant_name' => $vehicle->tenant->name,
                'room_name' => $vehicle->tenant->room->name,
                'house_name' => $vehicle->tenant->room->house->name,
            ];
        });

        return response()->json($vehicles);
    }

    public function deleteVehicle($vehicleId) {
        $vehicle = Vehicle::where('id', $vehicleId)->first();

        if(!$vehicle) {
            return response()->json(['message'=>'Không tìm thấy phương tiện'], 201);
        }
        $vehicle->delete();
        return response()->json(['message'=>'Xóa phương tiện thành công'], 200);
    }

    public function getOneVehicle($vehicleId) {
        $vehicle = Vehicle::with(['tenant.room.house'])->find($vehicleId);

        if(!$vehicle) {
            return response()->json(['message'=>'phương tiện không tồn tại'], 404);
        }

        $data = [
            'id' => $vehicle->id,
            'tenant_id' => $vehicle->tenant?->id,
            'type_vehicle' => $vehicle->type_vehicle,
            'license_plate' => $vehicle->license_plate,
            'description' => $vehicle->description,
            'tenant_name' => $vehicle->tenant?->name,
            'room_id' => $vehicle->tenant?->room?->id,
            'room_name' => $vehicle->tenant?->room?->name,
            'house_id' => $vehicle->tenant?->room?->house?->id,
            'house_name' => $vehicle->tenant?->room?->house?->name,
        ];

        return response()->json($data);
    }

    public function editVehicle(Request $request, $vehicleId) {
        $vehicle = Vehicle::find($vehicleId);

        if(!$vehicle) {
            return response()->json(['message'=>'Không tìm thấy phương tiện'], 404);
        }
        
        $vehicle->update([
            'tenant_id' => $request->tenant_id,
            'type_vehicle'=> $request-> type_vehicle,
            'license_plate' => $request-> license_plate,
            'description' => $request->description,
        ]);

        return response()->json(['message'=>'Cập nhật phương tiện thành công'], 200);
    }

}
