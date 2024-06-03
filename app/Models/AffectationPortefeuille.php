<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffectationPortefeuille extends Model
{
    use HasFactory;

    public function unitcommercial()
    {
        return $this->belongsTo(Unitcommercial::class);
    }

    public function segment()
    {
        return $this->belongsTo(Segment::class);
    }
}
