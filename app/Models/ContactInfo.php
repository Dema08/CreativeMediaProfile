<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'whatsapp_number',
        'google_map_embed',
        'google_map_link',
        'is_main_office',
    ];

    protected $casts = [
        'is_main_office' => 'boolean',
    ];
}
