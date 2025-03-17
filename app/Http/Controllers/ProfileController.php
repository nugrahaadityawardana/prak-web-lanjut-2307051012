<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile() {
        $data = [
            'nama' => 'Nugraha',
            'kelas' => 'D3MI',
            'npm' => '2307051012',
        ];
        return view('profile', $data);
    }
}