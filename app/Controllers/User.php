<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Profile | SDM Telkom '
        ];

        return view('auth/profile', $data);
    }

    public function logout()
    {
        $data = [
            'title' => 'Login | SDM Telkom '
        ];
        return view('auth/login', $data);
    }
}
