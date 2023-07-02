<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use App\Models\kategori_transaksi;
use App\Models\jenis_kategori_transaksi;
use Illuminate\Database\Eloquent\Concerns\HasUuids;


class transaksi extends Model
{
    use HasFactory;
    use HasUuids;

    public function uniqueIds(): array
    {   
        return ['uuid', 'uuid'];
    }

    protected $primaryKey = 'uuid';

    protected $fillable = [
        'tanggal',
        'jumlah',
        'kategori_transaksi_id',
        'jenis_kategori_transaksi_id',
        'deskripsi',
        'user_id'
    ];


    public function kategori_transaksi(): belongsTo
    {
        return $this->belongsTo(kategori_transaksi::class);
    }

    public function jenis_kategori_transaksi(): belongsTo
    {
        return $this->belongsTo(jenis_kategori_transaksi::class);
    }


}
