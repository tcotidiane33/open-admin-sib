<?php

namespace App\Models;

use Spatie\EloquentSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\SortableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Marche extends Model implements Sortable
{
    use HasFactory;
    use SortableTrait;

    protected $fillable = [
        'code',
        'name',
        'order_column',
    ];

    public $sortable = [
        'order_column_name' => 'order_column',
        'sort_when_creating' => true,
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
