<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'thumbnail',
        'features',
    ];

    protected $casts = [
        'features' => 'array',
        'price' => 'decimal:2',
    ];
}