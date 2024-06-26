<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penilaiandua extends Model
{
    use HasFactory;

    protected $table = 'penilaian';

    protected $fillable = [
        'alternative_id',
        'criteria_id',
        'biaya_tiket_masuk',
        'fasilitas',
        'kebersihan',
        'keamanan',
        'biaya_akomodasi',
    ];

    public function alternative()
    {
        return $this->belongsTo(Alternative::class);
    }
    public function criteria()
    {
        return $this->belongsTo(Criteria::class);
    }
}
