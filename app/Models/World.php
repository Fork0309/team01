<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class World extends Model
{
    use HasFactory;

    protected $fillable = [
        'region',
        'rule',
        'attitude',
        'technology',
        'environment',
        
        'created_at',
        'updated_at',
    ];
}
