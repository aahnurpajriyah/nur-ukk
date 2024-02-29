<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Satuan extends BaseController
{
    public function index()
    {
        //
    }

    public function dataSatuan()
    {
        $data = [
            'listSatuan' => $this->satuan->getSatuan()
        ];
        return view('satuan/data-satuan', $data);
    }

    public function tambahSatuan()
    {
        return view('satuan/tambah-satuan');
    }
}
