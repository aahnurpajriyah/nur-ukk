<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Produk extends BaseController
{
    // public function index()
    // {
    //     //
    // }

    public function dataProduk()
    {
        $data = [
            'listProduk' => $this->produk->getProduk()
        ];
        return view('produk/data-produk', $data);
    }

    public function tambahProduk()
    {

        return view('produk/tambah-produk');
    }

    public function simpanProduk()
    {
        $this->produk->save([
            'kode_produk' => $this->request->getVar('kodeProduk'),
            'nama_produk' => $this->request->getVar('namaProduk'),
            'harga_beli' => $this->request->getVar('hargaBeli'),
            '' => $this->request->getVar('namaProduk'),
        ]);
    }
}
