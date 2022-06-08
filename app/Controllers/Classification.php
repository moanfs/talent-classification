<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Classification extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Result | SDM Telkom '
        ];
        return view("pages/result", $data);
    }
}
