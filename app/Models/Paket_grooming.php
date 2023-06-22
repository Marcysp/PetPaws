<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paket_grooming extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'paket_grooming';
    // protected $fillable = ['nama']
    // untuk mengatasi error fillable bisa digantikan dengan guarded
    protected $guarded = [];
    public function detail_grooming()
    {
        return $this->hasMany(Detail_grooming::class);
    }
}
