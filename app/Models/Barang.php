<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_barang',
        'barang_kode',
        'barang_nama',
        'id_jenis',
        'id_suplier',
        'harga_jual',
        'barang_status'
    ];
}
