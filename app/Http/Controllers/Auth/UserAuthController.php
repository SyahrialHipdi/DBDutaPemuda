<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.user.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/user/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function showRegisterForm()
    {
        return view('auth.user.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            // 'nama' => 'required|string|max:255',
            'nik' => 'required|string|max:255|unique:users',
            // 'password' => 'required|string|min:8|confirmed',
        ]);

        $tglLahir = $request->input('tanggalLahir'); // format: Y-m-d

        // Generate password dari tanggal lahir misalnya (tanpa tanda strip)
        $password = str_replace('-', '', $tglLahir); // 19990519
        $hashedPassword = Hash::make($password);
    

        $user = User::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'tanggalLahir' => $request->tanggalLahir,
            'password' => $hashedPassword,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'desa' => $request->desa,
            'rt_rw' => $request->rt_rw,
            'alamat' => $request->alamat,
            'kodePos' => $request->kodePos,
            'proposal' => $request->proposal,
        ]);

        Auth::guard('web')->login($user);

        return redirect('user/dashboard')->with('success', "Berhasil Daftar, password Anda adalah {$password} (tanggal lahir) sialakn ganti password untuk keamanan");
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/user/login');
    }
}