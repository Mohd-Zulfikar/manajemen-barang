<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ['nama_barang',
                            'jenis_barang',
                            'stok',
                            'harga_satuan',
                            'status',
                            'userID'];

    
}


