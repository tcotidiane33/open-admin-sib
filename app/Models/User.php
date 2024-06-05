<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spatie\EloquentSortable\Sortable;
use Illuminate\Notifications\Notifiable;
use Spatie\EloquentSortable\SortableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements Sortable
{
    use HasFactory, Notifiable;
    use SortableTrait;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'phone',
        'unitcommercial_id',
        'fonction_id',
        'marche_id',
        'portefeuille_id',
        'superieur_id',
        'email',
        'password',
        'order_column',

    ];

    public $sortable = [
        'order_column_name' => 'order_column',
        'sort_when_creating' => true,
    ];

    public function unitcommercial(){
        return $this->belongsTo(Unitcommercial::class);
    }
    public function fonction(){
        return $this->belongsTo(Fonction::class);
    }
    public function marche(){
        return $this->belongsTo(Marche::class);
    }
    public function portefeuilles(){
        return $this->hasMany(Portefeuille::class);
    }
    // public function superieur(){
    //     return $this->belongsTo(User::class);
    // }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
