<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiLoginController extends Controller
{
    public function login(Request $request)
    {
        // validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // cari user di database
        $user = User::where('username', $request->username)->first();

        // cek password
        if ($user && Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => true,
                'message' => 'Login berhasil',
                'user' => [
                    'id' => $user->id,
                    'username' => $user->username,
                ]
            ]);
        }

        // gagal login
        return response()->json([
            'status' => false,
            'message' => 'Username atau password salah'
        ], 401);
    }
}
