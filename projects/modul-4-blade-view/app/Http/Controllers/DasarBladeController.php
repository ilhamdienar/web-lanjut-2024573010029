<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasarBladeController extends Controller
{
    public function showData()
    {
        $name = 'devi';
        $fruits = ['Apple', 'Banana', 'Cherry'];
        $user = [
            'name' => 'eva',
            'email' => 'eva@ilmudata.id',
            'is_active' => true,
        ];
        $product = (object) [
            'id' => 1,
            'name' => 'laptop',
            'price' => 1200000
        ];

        return view('dasar', compact('name', 'fruits', 'user', 'product'));
    }
}
