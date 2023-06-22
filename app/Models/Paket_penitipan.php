<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket_penitipan extends Model
{
    use HasFactory;
    protected $table = 'paket_penitipan';
    // protected $fillable = ['nama']
    // untuk mengatasi error fillable bisa digantikan dengan guarded
    protected $guarded = [];
    public function penitipan()
    {
        return $this->hasMany(Penitipan::class);
    }
}
