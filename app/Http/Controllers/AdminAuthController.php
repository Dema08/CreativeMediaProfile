<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    /**
     * Tampilkan form login admin
     */
    public function showLoginForm()
    {
        return view('auth.login'); 
    }

    /**
     * Proses login admin
     */
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // Attempt login menggunakan guard 'admin'
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect ke route admin dashboard
            return redirect()->intended(route('admin.dashboard'));
        }

        // Jika gagal login
        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ])->onlyInput('username');
    }

    /**
     * Logout admin
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke login admin
        return redirect()->route('admin.login');
    }
}
