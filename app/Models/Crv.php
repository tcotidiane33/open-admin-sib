<?php

namespace App\Models;

use Spatie\EloquentSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\SortableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Crv extends Model  implements Sortable
{
    use HasFactory;

    use SortableTrait;

    protected $fillable = [
        'Libelle',
        'order_column',
    ];

        public $sortable = [
            'order_column_name' => 'order_column',
            'sort_when_creating' => true,
        ];
}
