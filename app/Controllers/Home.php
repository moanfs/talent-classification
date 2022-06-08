<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard | SDM Telkom '
        ];
        return view('pages/dashboard', $data);
    }

    public function book()
    {
        $data = [
            'title' => 'Book | SDM Telkom '
        ];
        return view('pages/book', $data);
    }
}
