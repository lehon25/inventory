<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterBarang extends Model
{

    protected $table = 'master_barang';
    protected $fillable= ['name_barang','stok','harga_pembelian','harga_penjualan'];
}
