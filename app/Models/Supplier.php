<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;
class Supplier extends Model
{
    use AutoNumberTrait;
    
    
    public function getAutoNumberOptions()
    {
        return [
            'id_suplier' => [
                'format' => 'Spl-?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 5 // The number of digits in an autonumber
            ]
        ];
    }
    use HasFactory;
    protected $fillable =  [
        'id_suplier',
        'nama',
        'alamat',
        'phone',
        'status'
    ];
}
