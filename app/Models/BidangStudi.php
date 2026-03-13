<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangStudi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
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
