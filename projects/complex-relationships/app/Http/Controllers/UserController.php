<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Menampilkan daftar semua user dengan profile dan posts terkait
    public function index()
    {
        $users = User::with('profile', 'posts')->get();
        return view('users.index', compact('users'));
    }

    //Menampilkan detail user tertentu
    public function show(User $user)
    {
        // Menggunakan route model binding, Laravel akan otomatis 
        // mencari user berdasarkan ID yang diberikan
        return view('users.show', compact('user'));
    }
}
