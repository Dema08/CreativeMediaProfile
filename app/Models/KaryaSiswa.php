<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaryaSiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'slug',
        'kategori',
        'deskripsi',
        'image',
    ];

    public static function booted()
    {
        static::saving(function ($model) {
            if (empty($model->slug) && ! empty($model->nama)) {
                $model->slug = \Str::slug($model->nama);
            }
        });
    }
}
