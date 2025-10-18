<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIController extends Controller
{
    public function home(Request $request)
    {
        $theme = session('theme', 'light');
        $alertMessage = 'Selamat datang di Laravel UI';
        $features = [
            'Partial Views',
            'Blade Components',
            'Theme Switching',
            'Bootstrap 5',
            'Responsive Design'
        ];
        return view('home', compact('theme', 'alertMessage', 'features'));
    }

    public function about(Request $request)
    {
        $theme = session('theme', 'light');
        $alertMessage = 'Halaman ini menggunakan Partials Views!';
        $team = [
            ['name' => 'Ilham', 'role' => 'Developer'],
            ['name' => 'Budi', 'role' => 'Frontend Engineer'],
            ['name' => 'Rafa', 'role' => 'Senior Engineer']
        ];
        return view('about', compact('theme', 'alertMessage', 'team'));
    }

    public function contact(Request $request)
    {
        $theme = session('theme', 'light');
        $departments = [
            'Technical Support',
            'Sales',
            'Billing',
            'General Inquiry'
        ];
        return view('contact', compact('theme', 'departments'));
    }

    public function profile(Request $request)
    {
        $theme = session('theme', 'light');
        $user = [
            'name' => 'john doe',
            'email' => 'john.doe@example.com',
            'join_date' => '2024-05-20',
            'preferences' => ['Email Notificarions', 'Dark Mode', 'Newsletter']
        ];
        return view('profile', compact('theme', 'user'));
    }

    public function switchTheme($theme, Request $request)
    {
        if (in_array($theme, ['light', 'dark'])) {
            session(['theme' => $theme]);
        }
        return back();
    }
}
