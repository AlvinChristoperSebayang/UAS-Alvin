<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanans';
    protected $fillable = [
        'nama',
        'namaMakanan',
        'porsi',
        'alamat',
        'jenisPembayaran',
        'keterangan'
    ];
}
