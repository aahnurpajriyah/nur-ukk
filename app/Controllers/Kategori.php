<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Kategori extends BaseController
{
    // public function index()
    // {
    //     //
    // }

    public function dataKategori()
    {
        $data = [
            'listKategori' => $this->kategori->getKategori()
        ];
        return view('kategori/data-kategori', $data);
    }

    public function tambahKategori()
    {


        return view('kategori/tambah-kategori');
    }

    public function simpanKategori()
    {
        $validasiForm = [
            'nama_kategori' => 'required'
        ];

        if ($this->validate($validasiForm)) {
            // data yang akan disimpan ke DB 
            $data = [
                'nama_kategori' => $this->request->getPost('nama_kategori')
            ];

            //proses simpan ke DB
            $this->kategori->insert($data);
            session()->setFlashdata('info', '<div class="alert alert-success">Data berhasil disimpan</div>');
            return redirect()->to('/data-kategori');
        } else {
            // gagal upload
            return redirect()->to(site_url('tambah-kategori'))->with('info', '<div class="alert alert-danger">Data gagal disimpan ' . $this->validator->listErrors() . '</div>');
        }
        
    }


    public function hapusKategori($id)
    {
        $this->kategori->delete($id);
        return redirect()->to('data-kategori')->with('pesan', 'Data Berhasil Dihapus');
    }
    public function editKategori($idkategori)
    {
        $syarat = [
            'id_kategori' => $idkategori
        ];

        $data = [
            'detailKategori' => $this->kategori->getKategori(),
            'kategori' => $this->kategori->findAll()
        ];
        return view('kategori/edit-kategori', $data);
    }
    public function simpanEditKategori($id)
    {
       
        $data = [
          
            'nama_kategori' => $this->request->getVar('nama_kategori')
        ];

        $this->kategori->update($id, $data);
        return redirect()->to('data-kategori')->with('pesan', 'Data Berhasil Dihapus');
    }
}
