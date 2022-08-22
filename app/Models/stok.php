<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// use app\Http\Controllers\produkController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Http\Controllers\stokController;

class stok extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'stoks';
    protected $fillable = [
        'produk_id',
        'harga_produk',
        'ukuran',
        'variasi',
        'warna',
        'stok',
        'tanggal_input',
    ];

    public function produk()
    {
        return $this->belongsTo(produk::class, 'produk_id')->withDefault([
            'kode_produk' => 'Guest'
        ]);
    }

    public function pesanan()
    {
        return $this->belongsTo(pesanan::class); //apakah ini relasi sudah jalan?
        // return $this->belongsTo(pesanan::class, 'id'); // kurang lebih seperti ini
    }

}
