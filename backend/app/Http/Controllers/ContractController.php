<?php

namespace App\Http\Controllers;
use App\Models\Contract;
use App\Models\User;
use App\Models\Room;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContractController extends Controller
{
    public function createDepositContract(Request $request) {
        $existing = Contract::where('renter_id', $request->renter_id)
                        ->where('room_id', $request->room_id)
                        ->where('type', 'deposit')
                        ->first();
        if ($existing) {
            return response()->json([
                'message' => 'Hợp đồng cọc đã tồn tại cho người thuê này và phòng này.'
            ], 409);
        }


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

    public function getAllDepositContractByRenter($renterId) {
        $contracts = Contract::where('renter_id', $renterId)
            ->where('type', 'deposit')
            ->with(['room.house'])
            ->get();

        $result = $contracts->map(function ($contract) {
            $room = $contract->room;
            $house = $room->house ?? null;

            return [
                'room_id' => $room->id,
                'room_name' => $room->name ?? '',
                'room_price' => $room->price ?? '',
                'house_name' => $house->name ?? '',
                'house_address' => $house->address ?? '',
            ];
        });

        return response()->json(['deposit_contracts' => $result], 200);
    }















    public function getDepositContractDetail($renterId, $roomId) {
        $contract = Contract::where('renter_id', $renterId)
            ->where('room_id', $roomId)
            ->where('type', 'deposit')
            ->first();

        if (!$contract) {
            return response()->json(['message' => 'Không tìm thấy hợp đồng cọc'], 404);
        }

        $renter = User::find($renterId);
        $room = Room::find($roomId);
        $house = $room ? House::find($room->house_id) : null;
        $landlord = $house ? User::find($house->user_id) : null;

        return response()->json([
            'renter' => [
                'name' => $renter->name ?? '',
                'phone' => $renter->phone ?? '',
            ],
            'landlord' => [
                'name' => $landlord->name ?? '',
                'phone' => $landlord->phone ?? '',
            ],
            'room' => [
                'name' => $room->name ?? '',
                'price' => $room->price ?? '',
            ],
            'house' => [
                'name' => $house->name ?? '',
                'address' => $house->address ?? '',
            ],
            'contract' => [
                'deposit_amount' => $contract->amount,
                'start_date' => $contract->start_date,
            ]
        ]);
    }
}
