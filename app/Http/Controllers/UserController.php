<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user){
        // $user = User::findOrFail($id);
        return view('user.show',compact('user'));
    }

    // public function progress(User $user){
    //     // $user = User::findOrFail($id);
    //     return view('user.progress',compact('user'));
    // }

    public function edit($id)
    {
        $peserta = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|confirmed'
        ]);

        $peserta = User::findOrFail($id);
        $peserta->update($request->only('password'));

        return redirect()->route('user.dashboard')->with('berhasil', 'Password berhasil diperbarui.');
    }
}
