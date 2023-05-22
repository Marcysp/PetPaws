<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    // protected $fillable = ['nama']
    // untuk mengatasi error fillable bisa digantikan dengan guarded
    protected $guarded = [];

    public function detail_pesanan()
    {
        return $this->hasMany(Detail_pesanan::class);
    }
    public function produk_brand()
    {
        return $this->belongsTo(Produk_brand::class);
    }
    public function produk_kategori()
    {
        return $this->belongsTo(Produk_kategori::class);
    }
    public function kategori_hewan()
    {
        return $this->belongsTo(Kategori_hewan::class);
    }
}
