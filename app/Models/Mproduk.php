<?php

namespace App\Models;

use CodeIgniter\Model;

class Mproduk extends Model
{
    protected $table = 'tbl_produk';
    protected $primaryKey = 'id_produk';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['id_produk', 'kode_produk', 'nama_produk', 'harga_beli', 'id_satuan', 'id_kategori', 'stok'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    public function getProduk()
    {
        $produk = new Mproduk();
        $produk->select('tbl_produk.kode_produk, tbl_produk.nama_produk, tbl_produk.harga_beli, tbl_satuan.nama_satuan, tbl_kategori.nama_kategori, tbl_produk.stok');
        $produk->join('tbl_satuan', 'tbl_satuan.id_satuan=tbl_produk.id_satuan', 'LEFT');
        $produk->join('tbl_kategori', 'tbl_kategori.id_kategori=tbl_produk.id_kategori', 'LEFT');
        $produk->orderBy('tbl_produk.id_produk', 'desc');
        return $produk->find();
    }



}
