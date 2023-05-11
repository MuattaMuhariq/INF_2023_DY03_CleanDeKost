<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resevasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'waktu',
        'tanggal',
        'NoHp',
        'alamat',
        'status'
    ];
}
