<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'deskripsi',
        'rating',
        'num_of_rating',
        'htm',
        'alamat',
        'kategori'
    ];
}
