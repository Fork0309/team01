<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'profession',
        'world',
        'usage rate',
        'winning rate',
        'ban rate',
        'skin of shapes',
        'listing date',

        'created_at',
        'updated_at',
    ];
}
