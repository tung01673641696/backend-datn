<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceBill;

class ServiceBillController extends Controller
{
    public function addServiceBill(Request $request) {
        $validated = $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'month' => 'required|integer|min:1|max:12',
            'year' => 'required|integer|min:2020',
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
}
