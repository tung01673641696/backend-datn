<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceBill;
use Illuminate\Support\Facades\DB;


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

    public function getAllServiceBill() {

        $bills = DB::table('service_bills')
        ->join('tenants', 'service_bills.room_id', '=', 'tenants.room_id')
        ->join('rooms', 'service_bills.room_id', '=', 'rooms.id')
        ->join('houses', 'rooms.house_id', '=', 'houses.id')
        ->select(
            'service_bills.*',
            'rooms.*',
            'houses.name as house_name',
            'tenants.name as tenant_name'
        )
        ->orderByDesc('billing_date')
        ->get();
        

        $formatted = $bills->map(function ($bill) {
    return [
        'id' => $bill->id,
        'billing_date' => $bill->billing_date,
        'electric_usage' => $bill->electric_usage,
        'water_usage' => $bill->water_usage,
        'electric_price' => $bill->electric_price,
        'water_price' => $bill->water_price,
        'total_amount' => $bill->total_amount,
        'status' => $bill->status,
        'room_name' => $bill->name ?? null, // nếu rooms.name => alias lại cho rõ hơn
        'house_name' => $bill->house_name,
        'tenant_name' => $bill->tenant_name ?? null,
    ];
});


        return response()->json([
            'message' => 'Danh sách hóa đơn dịch vụ',
            'data' => $formatted,
        ]);
        }
}
