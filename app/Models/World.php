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

    public function players()
    {
        return $this->hasMany('App\Models\Player', 'world');
    }

    public function delete()
    {
        $this->players()->delete();
        return parent::delete();
    }
    
    public function scopeAllTechnologys($query)
    { 
        return $query->select('technology')->groupBy('technology');
    }

    public function scopeTechnology($query, $tec)
    {
        return $query->where('technology', '=', $tec);
    }
}
