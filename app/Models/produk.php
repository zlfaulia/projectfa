<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Http\Controllers\produkController;

class produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kode_produk',
        'gambar_produk',
        'nama_produk',
        'deskripsi_produk',
    ];

    // public function user() {
    //     return $this->belongsTo('App\User', 'user_id');
    // }
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function stok() {
        return $this->hasMany(stok::class);
    }

    public function pesanan()
    {
        return $this->belongsTo(pesanan::class);
    }
}

