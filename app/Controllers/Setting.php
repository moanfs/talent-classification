<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Setting extends BaseController
{
    public function index()
    {
        //
    }

    public function performance()
    {
        $data = [
            'title' => " Performance | SDM Telkom"
        ];

        return view('pages/performance', $data);
    }

    public function capacity()
    {
        $data = [
            'title' => " Capacity | SDM Telkom"
        ];

        return view('pages/capacity', $data);
    }
}
