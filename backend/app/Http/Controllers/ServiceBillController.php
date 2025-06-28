<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceBill;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Tenant;

class ServiceBillController extends Controller
{
    public function addServiceBill(Request $request) {
        $validated = $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'billing_date' => 'required|date|after_or_equal:' . now()->startOfMonth()->format('Y-m-d'),
            'electric_usage' => 'required|integer|min:0',
            'water_usage' => 'required|integer|min:0',
            'electric_price' => 'required|numeric|min:0',
            'water_price' => 'required|numeric|min:0',
            'total_amount' => 'required|numeric|min:0',
        ]);

        $bill = ServiceBill::create($validated);

        return response()->json([
            'message' => 'Tạo hóa đơn thành công',
            'data' => $bill,
        ], 201);
    }

    public function getAllServiceBillByLandlord(Request $request) {
        $houseId = $request->query('house_id');
        $roomId = $request->query('room_id');
        $billingDate = $request->query('billing_date');
        $status = $request->query('status');

        $bills = DB::table('service_bills')
            ->leftJoin('rooms', 'service_bills.room_id', '=', 'rooms.id')
            ->leftJoin('houses', 'rooms.house_id', '=', 'houses.id')
            ->leftJoin(DB::raw('
                (SELECT t1.room_id, t1.name as tenant_name FROM tenants t1
                INNER JOIN (
                    SELECT room_id, MAX(created_at) as latest_created FROM tenants GROUP BY room_id
                ) t2 ON t1.room_id = t2.room_id AND t1.created_at = t2.latest_created
                ) as tenant_sub
            '), 'service_bills.room_id', '=', 'tenant_sub.room_id')
            ->select(
                'service_bills.*',
                'rooms.name as room_name',
                'houses.name as house_name',
                'tenant_sub.tenant_name'
            );

        if (!empty($houseId)) {
            $bills->where('rooms.house_id', $houseId);
        }

        if (!empty($roomId)) {
            $bills->where('rooms.id', $roomId);
        }

        if (!empty($billingDate)) {
            $bills->where('service_bills.billing_date', 'like', $billingDate . '%');
        }

        if (!empty($status)) {
            $bills->where('service_bills.status', $status);
        }

        $result = $bills->orderByDesc('service_bills.billing_date')->get();

        $formatted = $result->map(function ($bill) {
            return [
                'id' => $bill->id,
                'billing_date' => $bill->billing_date,
                'electric_usage' => $bill->electric_usage,
                'water_usage' => $bill->water_usage,
                'electric_price' => $bill->electric_price,
                'water_price' => $bill->water_price,
                'total_amount' => $bill->total_amount,
                'status' => $bill->status,
                'room_name' => $bill->room_name ?? null,
                'house_name' => $bill->house_name ?? null,
                'tenant_name' => $bill->tenant_name ?? null,
            ];
        });

        return response()->json([
            'message' => 'Danh sách hóa đơn dịch vụ',
            'data' => $formatted,
        ]);
    }

    public function updateStatusBill($id) {
        $bill = ServiceBill::find($id);
        if (!$bill) {
            return response()->json(['message' => 'Hóa đơn không tồn tại'], 404);
        }

        $bill->status = 'paid';
        $bill->save();

        return response()->json([
            'message' => 'Cập nhật trạng thái hóa đơn thành công',
            'data' => $bill,
        ]);
    }

    public function getDetailBill($id) {
        $bill = ServiceBill::find($id);

        if (!$bill) {
            return response()->json([
                'message' => 'Hóa đơn dịch vụ không tồn tại'
            ], 404);
        }

        return response()->json([
            'data' => $bill
        ]);
    }

    public function getAllServiceBillByTenant($tenantId) {
        $tenant = DB::table('tenants')->where('id', $tenantId)->first();

        if (!$tenant) {
            return response()->json(['message' => 'Tenant không tồn tại'], 404);
        }

        $roomId = $tenant->room_id;

        $bills = DB::table('service_bills')
            ->leftJoin('rooms', 'service_bills.room_id', '=', 'rooms.id')
            ->leftJoin('houses', 'rooms.house_id', '=', 'houses.id')
            ->where('service_bills.room_id', $roomId)
            ->select(
                'service_bills.*',
                'rooms.name as room_name',
                'houses.name as house_name'
            )
            ->orderByDesc('service_bills.billing_date')
            ->get();

        return response()->json([
            'message' => 'Danh sách hóa đơn dịch vụ theo tenant',
            'data' => $bills
        ]);
    }

}
