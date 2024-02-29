<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Penjualan extends BaseController
{
    public function index()
    {
        //
    }
    public function formPenjualan()
    {
        $data = [
            'noFaktur' => $this->penjualan->generateTransactionNumber()
        ];
        return view ('penjualan/form-penjualan', $data);
    }
}
