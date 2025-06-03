<?php

namespace App\Http\Controllers;
use App\Models\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContractController extends Controller
{
    public function createDepositContract(Request $request) {
        $contract = Contract::create([
        'renter_id' => $request->renter_id,
        'room_id'=> $request->room_id,
        'type' => 'deposit',
        'amount' => $request->amount,
        'start_date' => $request->start_date,
        'note' => $request->note,
        'status' => 'signed'
        ]);

        return response()->json(['message' => 'Thêm hợp đồng cọc thành công', 'deposit-contract' => $contract], 200);
    }
}
