<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
  use AutoNumberTrait;
    
    
    public function getAutoNumberOptions()
    {
        return [
            'order_number' => [
                'format' => 'Adm-?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 5 // The number of digits in an autonumber
            ]
        ];
    }
    use HasFactory;
    protected $fillable =[
      'id_pasien','nama_pasien','jk','alamat','no_telp'  
    ];
}
