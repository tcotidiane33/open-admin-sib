<?php

namespace App\Models;

use Spatie\EloquentSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\SortableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Objet extends Model implements Sortable
{
    use HasFactory;

    use SortableTrait;

    protected $fillable = [
        'libelle',
        'order_column',
    ];

        public $sortable = [
            'order_column_name' => 'order_column',
            'sort_when_creating' => true,
        ];
}
