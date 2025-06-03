<?php

namespace App\Http\Controllers;
use App\Models\RentalRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RentalRequestController extends Controller
{
    public function rentalRequest($userId, $roomId) {
        $existing = RentalRequest::where('user_id', $userId)
            ->where('room_id', $roomId)
            ->first();

        if ($existing) {
            return response()->json([
                'message' => 'Bạn đã gửi yêu cầu giữ phòng này rồi.'
            ], 409);
        }

        $rentalRequest = RentalRequest::create([
            'user_id' => $userId,
            'room_id' => $roomId,
            'note' => "",
            'status' => 'pending'
        ]);

        return response()->json([
            'message' => 'Gửi yêu cầu giữ chỗ thành công',
            'data' => $rentalRequest
        ], 201);
    }

    public function getAllRentalRequest($userId) {
        $requests = RentalRequest::with(['user', 'room.house'])
            ->whereHas('room.house', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })
            ->orderBy('created_at', 'desc')
            ->get()
            ->map(function ($request) {
                return [
                    'renter_name' => $request->user->name ?? null,
                    'renter_phone' => $request->user->phone ?? null,
                    'room_name' => $request->room->name ?? null,
                    'house_name' => $request->room->house->name ?? null,
                    'house_address' => $request->room->house->address ?? null,
                    'status' => $request->status,
                    'created_at' => $request->created_at->format('Y-m-d H:i:s'),
                ];
            });

        return response()->json(['data' => $requests], 200);
    }
}
