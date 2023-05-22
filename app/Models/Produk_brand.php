<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk_brand extends Model
{
    use HasFactory;
    protected $table = 'produk_brand';
    // protected $fillable = ['nama']
    // untuk mengatasi error fillable bisa digantikan dengan guarded
    protected $guarded = [];
    
    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
