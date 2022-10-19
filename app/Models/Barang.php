<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;
class Barang extends Model
{
    use AutoNumberTrait;
    
    
    public function getAutoNumberOptions()
    {
        return [
            'id_barang' => [
                'format' => 'Brg-?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 5 // The number of digits in an autonumber
            ]
        ];
    }
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
