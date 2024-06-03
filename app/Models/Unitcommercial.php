<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unitcommercial extends Model
{
    use HasFactory;
    
    public function affectationPortefeuilles()
    {
        return $this->hasMany(AffectationPortefeuille::class);
    }
}
