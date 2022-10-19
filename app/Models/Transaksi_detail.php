<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;
class Transaksi_detail extends Model
{
    use AutoNumberTrait;
    
    
    public function getAutoNumberOptions()
    {
        return [
            'id_detail' => [
                'format' => 'Dtl-?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 5 // The number of digits in an autonumber
            ]
        ];
    }
    use HasFactory;
    protected $fillable = [
        'id_detail',
        'id_transaksi',
        'id_barang',
        'jenis_trx',
        'harga_trx',
        'jumlah_trx',
        'detail_status'
    ];
}
