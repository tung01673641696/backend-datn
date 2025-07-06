<?php

namespace App\Http\Controllers;
use App\Models\Contract;
use App\Models\User;
use App\Models\Room;
use App\Models\House;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\RentalRequest;

class ContractController extends Controller
{
    public function createDepositContract(Request $request) {
        $existing = Contract::where('renter_id', $request->renter_id)
                        ->where('room_id', $request->room_id)
                        ->where('type', 'deposit')
                        ->first();
        RentalRequest::where('user_id', $request->renter_id)
            ->where('room_id', $request->room_id)
            ->delete();
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
        'status' => 'pending'
        ]);
        return response()->json(['message' => 'Thêm hợp đồng cọc thành công', 'deposit-contract' => $contract], 200);
    }

    public function getAllDepositContractByRenter($renterId) {
        $contracts = Contract::where('renter_id', $renterId)
            ->where('type', 'deposit')
            ->whereIn('status', ['pending','signed'])
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
                'contract_id' => $contract->id,
                'deposit_amount' => $contract->amount,
                'status' => $contract->status,
                'start_date' => $contract->start_date,
            ]
        ]);
    }

    public function cancelDepositContract($id) {
        $contract = Contract::find($id);

        if (!$contract) {
            return response()->json(['message' => 'Hợp đồng không tồn tại'], 404);
        }

        $contract->status = 'cancelled';
        $contract->save();

        return response()->json([
            'message' => 'Hợp đồng đã được hủy thành công',
            'contract' => $contract
        ]);
    }

    public function confirmDepositContract($id) {
        $contract = Contract::find($id);

        if (!$contract) {
            return response()->json(['message' => 'Hợp đồng không tồn tại'], 404);
        }

        $contract->status = 'signed';
        $contract->save();

        return response()->json([
            'message' => 'Bạn đã xác nhận hợp đồng cọc',
            'contract' => $contract
        ]);
    }


    public function getAllDepositContractsByLandlord($landlordId) {
        $houseIds = House::where('user_id', $landlordId)->pluck('id');
        $roomIds = Room::whereIn('house_id', $houseIds)->pluck('id');

        $contracts = Contract::whereIn('room_id', $roomIds)
            ->where('type', 'deposit')
            ->with(['room.house', 'renter'])
            ->get();

        $result = $contracts->map(function ($contract) {
            $room = $contract->room;
            $house = $room->house ?? null;
            $renter = $contract->renter ?? null;

            return [
                'contract_id' => $contract->id,
                'deposit_amount' => $contract->amount,
                'start_date' => $contract->start_date,
                'status' => $contract->status,

                'renter' => [
                    'id' => $renter->id ?? null,
                    'name' => $renter->name ?? '',
                    'phone' => $renter->phone ?? '',
                ],
                'room' => [
                    'id' => $room->id ?? null,
                    'name' => $room->name ?? '',
                    'price' => $room->price ?? '',
                ],
                'house' => [
                    'id' => $house->id ?? null,
                    'name' => $house->name ?? '',
                    'address' => $house->address ?? '',
                ],
            ];
        });

        return response()->json(['deposit_contracts' => $result], 200);
    }

    public function createContract(Request $request) {
        $existingRental = Contract::where('room_id', $request->room_id)
            ->where('type', 'rental')
            ->whereIn('status', ['signed', 'cancelled'])
            ->first();

        if ($existingRental) {
            return response()->json([
                'error' => 'Phòng đã có hợp đồng thuê.'
            ], 409);
        }

        $contract = Contract::create([
            'room_id' => $request->room_id,
            'type' => 'rental',
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => 'signed'
        ]);

        Tenant::create([
            'room_id' => $request->room_id,
            'name' => $request->name,
            'phone' => $request->phone,
            'identity_number' => $request->identity_number,
        ]);

        Room::where('id', $request->room_id)->update([
            'status' => 'rented'
        ]);

        return response()->json(['message' => 'Tạo hợp đồng thuê và lưu thông tin khách thuê thành công']);
    }

    public function landlordGetAllContract($landlordId) {
        $houseIds = House::where('user_id', $landlordId)->pluck('id');
        $roomIds = Room::whereIn('house_id', $houseIds)->pluck('id');

        $contracts = Contract::whereIn('room_id', $roomIds)
            ->where('type', 'rental')
            ->with(['room.house', 'tenant'])
            ->get();

        $result = $contracts->map(function ($contract) {
            $room = $contract->room;
            $house = $room->house ?? null;
            $tenant = $contract->tenant ?? null;

            return [
                'contract_id' => $contract->id,
                'start_date' => $contract->start_date,
                'end_date' => $contract->end_date,
                'status' => $contract->status,

                'tenant' => [
                    'id' => $tenant->id ?? null,
                    'name' => $tenant->name ?? '',
                    'phone' => $tenant->phone ?? '',    
                ],
                'room' => [
                    'id' => $room->id ?? null,
                    'name' => $room->name ?? '',
                    'price' => $room->price ?? '',
                    'price_deposit' => $room->price_deposit
                ],
                'house' => [
                    'id' => $house->id ?? null,
                    'name' => $house->name ?? '',
                    'address' => $house->address ?? '',
                ],
            ];
        });

        return response()->json(['contract' => $result], 200);
    }


    public function getRentalContractDetail($roomId) {
        $contract = Contract::where('room_id', $roomId)
            ->where('type', 'rental')
            ->with(['room.house.owner'])
            ->first();

        if (!$contract) {
            return response()->json(['message' => 'Không tìm thấy hợp đồng thuê'], 404);
        }

        $tenant = Tenant::where('room_id', $roomId)
            ->orderBy('created_at', 'desc')
            ->first();

        return response()->json([
            'contract_id' => $contract->id,
            'start_date' => $contract->start_date,
            'end_date' => $contract->end_date,
            'status' => $contract->status,
            'note' => $contract->note,
            'renter' => [
                'name' => $tenant->name,
                'phone' => $tenant->phone,
                'identity_number' => $tenant->identity_number
            ],
            'room' => [
                'id' => $contract->room->id ?? null,
                'name' => $contract->room->name ?? '',
                'price' => $contract->room->price ?? '',
            ],
            'house' => [
                'id' => $contract->room->house->id ?? null,
                'name' => $contract->room->house->name ?? '',
                'address' => $contract->room->house->address ?? '',
                'electric_price' => $contract->room->house->electric_price ?? '',
                'water_price' => $contract->room->house->water_price ?? ''
            ],

            'owner' => [
                'id' => $contract->room->house->owner->id ?? null,
                'name' => $contract->room->house->owner->name ?? '',
                'phone' => $contract->room->house->owner->phone ?? '',
            ],
        ]);
    }

    public function getAllRentalContractsByTenant($tenantId) {
        $roomId = Tenant::where('id', $tenantId)->value('room_id');

        if (!$roomId) {
            return response()->json(['message' => 'Người thuê không có phòng ở hiện tại'], 404);
        }

        $contracts = Contract::where('room_id', $roomId)
            ->where('type', 'rental')
            ->where('status', 'signed')
            ->with(['room.house'])
            ->get();

        if ($contracts->isEmpty()) {
            return response()->json(['message' => 'Không có hợp đồng thuê nào cho người thuê này'], 404);
        }

        $result = $contracts->map(function ($contract) {
            $room = $contract->room;
            $house = $room->house ?? null;

            return [
                'contract_id' => $contract->id,
                'start_date' => $contract->start_date,
                'end_date' => $contract->end_date,
                'status' => $contract->status,

                'room' => [
                    'id' => $room->id ?? null,
                    'name' => $room->name ?? '',
                    'price' => $room->price ?? '',
                ],
                'house' => [
                    'id' => $house->id ?? null,
                    'name' => $house->name ?? '',
                    'address' => $house->address ?? '',
                ]
            ];
        });

        return response()->json(['rental_contracts' => $result], 200);
    }
}
