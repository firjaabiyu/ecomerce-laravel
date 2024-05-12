<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $guarded = [];

    
    public function toko()
    {
        return $this->belongsTo(toko::class, 'id_toko');
    }
    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'id_kategori');
    }
}
