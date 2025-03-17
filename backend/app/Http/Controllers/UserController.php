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
            return response()->json(['message' => 'Số điện thoại đã tồn tại'], 422);
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
            throw ValidationException::withMessage([
                'message' => ['Số điện thoại hoặc mật khẩu không đúng']
            ]);
        }
       
        $token = $user->createToken('auth_token') ->plainTextToken;
        // return $user;
        return response()->json([
            'user' => $user,
            'token' => $token
        ]);
    }
}
