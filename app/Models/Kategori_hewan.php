<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_hewan extends Model
{
    use HasFactory;
    protected $table = 'kategori_hewan';
    // protected $fillable = ['nama']
    // untuk mengatasi error fillable bisa digantikan dengan guarded
    protected $guarded = [];
}
