<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'address',
        'phone_number',
        'phone_secondary',
        'email',
        'email_secondary',
    ];
}

