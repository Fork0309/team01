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
        'usage_rate',
        'winning_rate',
        'ban_rate',
        'skin_of_shapes',
        'listing_date',

        'created_at',
        'updated_at',
    ];

    public function region()
    {
        return $this->belongsTo('App\Models\World', 'world', 'id');
    }

    public function scopeAllProfessions($query)
    { 
        return $query->select('profession')->groupBy('profession');
    }

    public function scopeProfession($query, $pro)
    {
        return $query->where('profession', '=', $pro);
    }    
}
