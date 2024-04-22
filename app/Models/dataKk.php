<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKk extends Model
{
    use HasFactory;

    protected $fillable = [
        'kepala_keluarga', // tambahkan properti kepala_keluarga ke fillable
        'image',
        'no_kk',
        'rt_id',
        'status_ekonomi',
    ];
}