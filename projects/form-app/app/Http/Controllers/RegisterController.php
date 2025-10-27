<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showForm()
    {
        return view('register');
    }

    public function handleform(Request $request)
    {
        $customMessages = [
            'name.required' => 'kami perlu tahu nama anda',
            'email.required' => 'Email anda penting bagi kami',
            'email.email' => 'hmm...Itu tidak terlihat seperti email yang valid',
            'password.required' => 'jangan lupa untuk set password',
            'password.min' => 'password harus minimal :min karakter',
            'username.regex' => 'username hanya boleh berisi huruf dan angka',
        ];

        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'username' => ['required', 'regex:/^[a-z A-Z 0-9]+$/'],
            'password' => 'required|min:6',
        ], $customMessages);

        return redirect()->route('register.show')->with('success', 'registrasi berhasil');
    }
}
