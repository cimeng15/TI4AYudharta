<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'nama',
        'nim',
        'jurusan',
        'semester',
        'jenis_kelamin',
        'alamat',
    ];
}
