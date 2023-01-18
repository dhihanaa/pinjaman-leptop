<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'tujuan',
        'keterangan',
        'nis',
        'rayon',
        'tanggal',
        'guru',
        'tanggal_kembali',
    ];
}
