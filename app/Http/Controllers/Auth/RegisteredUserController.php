<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log; // Tambahkan ini untuk mencatat error

class RegisteredUserController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store(Request $request) {
        // 1. Validasi Input
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:3'],
        ]);

        try {
            // 2. Simpan User Baru
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // 3. Login Otomatis
            Auth::login($user);

            // 4. Redirect ke Dashboard
            return redirect()->route('dashboard');

        } catch (\Exception $e) {
            // Jika gagal simpan ke DB, catat error-nya
            Log::error('Gagal daftar: ' . $e->getMessage());
            return back()->withErrors(['email' => 'Gagal mendaftar. Silakan coba lagi.']);
        }
    }
}