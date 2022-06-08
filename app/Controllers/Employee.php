<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Employee extends BaseController
{
    public function index()
    {
        //
    }

    public function dosen_stkr()
    {
        $data = [
            'title' => 'Dosen Struktural | SDM Telkom'
        ];
        return view('dosen/struktural', $data);
    }
    public function dosen_nonstkr()
    {
        $data = [
            'title' => 'Dosen Non Struktural | SDM Telkom'
        ];
        return view('dosen/nonstruktural', $data);
    }
    public function tpa_stkr()
    {
        $data = [
            'title' => 'TPA Non Struktural | SDM Telkom'
        ];
        return view('tpa/nonstruktural', $data);
    }
    public function tpa_nonstkr()
    {
        $data = [
            'title' => 'tpa Non Struktural | SDM Telkom'
        ];
        return view('tpa/nonstruktural', $data);
    }
}
