<?php

namespace App\Http\Controllers;
use App\Models\Tenant;
use Illuminate\Http\Request;

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
}
