<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'produk_id',
        'stok_id',
        'jumlah',
        'total_bayar',
        'tanggal_pesan',
        'catatan_pesanan',
        'opsi_pengiriman',
    ];


    public function user() {
        return $this->belongsTo(User::class);
    }

    public function stok() {
        return $this->hasOne(stok::class);
    }

    public function produk() {
        return $this->hasMany(produk::class);
    }
}

