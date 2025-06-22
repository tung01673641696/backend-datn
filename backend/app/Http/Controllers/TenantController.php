<?php

namespace App\Http\Controllers;
use App\Models\Tenant;
use App\Models\Contract;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TenantController extends Controller
{
    public function addTenant(Request $request) {
        $tenant = Tenant::create([
        'name' => $request->name,
        'phone'=> $request-> phone,
        'identity_number' => $request->identity_number,
        'room_id' => $request-> room_id,
        'note' => $request->note,
        ]);

        return response()->json(['message' => 'Thêm khách thuê thành công', 'tenant' => $tenant], 200);
    }

    public function getAllTenant(Request $request) {
        $status = $request->query('status');

        $tenantsQuery = Tenant::with(['room', 'room.house']);

        if ($status === 'active') {
            $tenantsQuery->whereNull('deleted_at');
        } elseif ($status === 'inactive') {
            $tenantsQuery->onlyTrashed();
        }

        $tenants = $tenantsQuery->get()->map(function ($tenant, $index) {
            return [
                'index' => $index + 1,
                'tenant' => $tenant,
                'house_id' => $tenant->room->house->id ?? null,
                'house_name' => $tenant->room->house->name ?? null,
                'room_id' => $tenant->room->id ?? null,
                'room_name' => $tenant->room->name ?? null,
            ];
        });

        return response()->json($tenants);
    }

    public function deleteTenant($tenantId) {
        $tenant = Tenant::findOrFail($tenantId);

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

    public function getDetailTenantByRoom($roomId) {
        $tenant = Contract::where('room_id', $roomId)->where('type','deposit')
        ->first();

        if(!$tenant) {
            return null;
        }
        
        $userDetail = User::where('id', $tenant->renter_id)->first();
        return $userDetail;
    }
}