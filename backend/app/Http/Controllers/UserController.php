<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request) {
        $exists = User::where('phone', $request->phone)->exists();
        if($exists) {
            return response()->json(['message' => 'Số điện thoại đã tồn tại', 'code' => 422]);
        }

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id
        ]);
        
        return response()->json([
            'message' => 'Đăng ký thành công',
            'user' => $user,
        ], 201);
    }

    public function login(Request $request) {
        
        $user = User::where('phone', $request->phone)->first();
        
        if(!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'message' => ['Sai tài khoản hoặc mật khẩu']
            ]);
        }
       
        $token = $user->createToken('auth_token') ->plainTextToken;
        // return $user;
        return response()->json([
            'user' => $user,
            'token' => $token
        ]);
    }

    public function getAllUser() {
        $activeUsers = User::with('role')
            ->whereNull('deleted_at')
            ->select('id', 'name', 'phone', 'role_id', 'created_at')
            ->get();

        $inactiveUsers = User::with('role')
            ->onlyTrashed()
            ->select('id', 'name', 'phone', 'role_id', 'created_at')
            ->get();

        $users = $activeUsers->map(function ($user) {
            return [
                'id' => $user->id,
                'name' => $user->name,
                'phone' => $user->phone,
                'role' => $user->role->name,
                'created_at' => $user->created_at->format('H:i d/m/Y'),
                'status' => 'active'
            ];
        })->merge($inactiveUsers->map(function ($user) {
            return [
                'id' => $user->id,
                'name' => $user->name,
                'phone' => $user->phone,
                'role' => $user->role->name,
                'created_at' => $user->created_at->format('H:i d/m/Y'),
                'status' => 'inactive'
            ];
        }));

        return response()->json($users);
    }

    public function deleteUser($userId) {
        $user = User::findOrFail($userId);

        if(!$user) {
            return response()->json(['message'=>'Không tìm thấy người dùng'], 201);
        }
        $user->delete();
        return response()->json(['message'=>'Xóa người dùng thành công'], 200);
    }

    public function restoreUser($userId) {
        $user = User::withTrashed()->findOrFail($userId);

        if (!$user->trashed()) {
            return response()->json(['message' => 'Người dùng đang hoạt động'], 400);
        }

        $user->restore();
        return response()->json(['message' => 'Khôi phục người dùng thành công'], 200);
    }

    public function getDetailUser($userId) {
        $user = User::where('id', $userId)->first();

        if(!$user) {
            return response()->json(['message' => 'Không tìm thấy người dùng'], 404);
        }

        return response()->json($user);
    }
}
