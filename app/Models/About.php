<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'features',
        'ceo_name',
        'ceo_image',
        'phone_number',
        'years_of_experience',
        'image'
    ];

    protected $casts = [
        'features' => 'array',
    ];
}

