<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporanModal extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_modal',
        'harga',
    ];
}
