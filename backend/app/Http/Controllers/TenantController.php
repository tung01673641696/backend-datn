<?php

namespace App\Http\Controllers;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TenantController extends Controller
{
    public function addTenant(Request $request) {
        $tenant = Tenant::create([
        'name' => $request->name,
        'phone'=> $request-> phone,
        'room_id' => $request-> room_id,
        'note' => $request->note,
        ]);

        return response()->json(['message' => 'Thêm khách thuê thành công', 'tenant' => $tenant], 200);
    }

    public function getAllTenant(Request $request) {
        $tenants = Tenant::with(['room', 'room.house'])
            ->get()
            ->map(function ($tenant, $index) {
                return [
                    'index' => $index + 1,
                    'tenant' => $tenant,
                    'house_id' => $tenant->room->house->id, 
                    'house_name' => $tenant->room->house->name,
                    'room_id' => $tenant->room->id,
                    'room_name' => $tenant->room->name,
                ];
            });
    
        return response()->json($tenants);
    }

    public function deleteTenant($tenantId) {
        $tenant = Tenant::where('id', $tenantId)->first();

        if(!$tenant) {
            return response()->json(['message'=>'Không tìm thấy khách thuê'], 201);
        }
        $tenant->delete();
        return response()->json(['message'=>'Xóa khách thuê thành công'], 200);
    }

    public function showTenant($tenantId) {
        $tenant = Tenant::with(['room.house'])->find($tenantId);

        if(!$tenant) {
            return response()->json(['message'=>'Khách thuê không tồn tại'], 404);
        }
        return response()->json($tenant);
    }

    public function updateTenant(Request $request, $tenantId) {
        $tenant = Tenant::find($tenantId);
        
        if(!$tenant) {
            return response()->json(['message'=>'Không tìm thấy khách thuê'], 404);
        }
        
        $tenant->update([
            'name' => $request->name, 
            'phone' => $request->phone,
            'room_id' => $request->room_id,
            'note' => $request->note
        ]);

        return response()->json(['message'=>'Cập nhật thông tin khách thuê thành công'], 200);
    }

    public function getTenantRoom($roomId) {
        $tenant = Tenant::where('room_id', $roomId)->get();
        return $tenant;
    }
}