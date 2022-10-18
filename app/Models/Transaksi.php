<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_transaksi',
        'id_admin',
        'tgl_trx',
        'no_nota',
        'status_trx'
    ];
}
