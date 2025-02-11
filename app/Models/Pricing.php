<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    protected $fillable = [
        'plan_name',
        'price',
        'description',
        'features',
    ];

    protected $casts = [
        'features' => 'array', // Casting the features column as an array
    ];
}
