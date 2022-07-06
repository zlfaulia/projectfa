<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_konsumen',
        'alamat_pengiriman',
        'nama_produk',
        'ukuran',
        'variasi',
        'jumlah',
        'total_bayar',
        'tanggal_pesan',
        'catatan_pesanan',
        'opsi_pengiriman',
    ];
}
