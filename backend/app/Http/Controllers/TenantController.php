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
                    'house_name' => $tenant->room->house->name,
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
}