<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\kategori_transaksi;

class jenis_kategori_transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
    ];

    public function kategori_transaksi(): HasMany
    {
        return $this->hasMany(kategori_transaksi::class);
    }
    
}
