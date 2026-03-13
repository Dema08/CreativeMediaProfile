<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'nama',
        'jabatan',
        'pesan',
        'rating',
        'foto',
    ];

    protected $casts = [
        'rating' => 'integer',
    ];
}
