<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors(),
            ], 422);
        }

        // Cek kredensial
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'status' => 'error',
                'message' => 'Salah email atau password',
            ], 401);
        }

        // Ambil user yang terautentikasi
        $user = Auth::user();
        $token = $user->createToken('API Token')->accessToken;

        // Ambil data mahasiswa atau dosen
        $data = null;
        if ($user->role_id == 3) { // Mahasiswa
            $data = Mahasiswa::where('user_id', $user->id)->first();
        } elseif ($user->role_id == 2) { // Dosen
            $data = Dosen::where('user_id', $user->id)->first();
        }

        return response()->json([
            'status' => 'success',
            'token' => $token,
            'user' => $user,
            'data' => $data,
        ], 200);
    }
}