<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Publikasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'status',
        'jenis',
        'pic_kontak',
        'pic_name',
        'keterangan_slide',
        'deskripsi',
        'lampiran',
    ];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
