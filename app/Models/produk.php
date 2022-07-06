<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Http\Controllers\produkController;

class produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'gambar_produk',
        'nama_produk',
        'harga_produk',
        'stok_produk',
        'deskripsi_produk',
    ];
}
