<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_grooming extends Model
{
    use HasFactory;
    protected $table = 'detail_grooming';
    // protected $fillable = ['nama']
    // untuk mengatasi error fillable bisa digantikan dengan guarded
    protected $guarded = [];

    public function paket_grooming()
    {
        return $this->belongsTo(Paket_grooming::class);
    }
}
