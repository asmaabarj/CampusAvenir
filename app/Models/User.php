<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    use SoftDeletes;

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = 
    [
         'nom',
         'prenom', 
         'email', 
         'tele', 
         'photo', 
         'adresse', 
         'date_naissance', 
         'niveau', 
         'ecole', 
         'role', 
         'password'
        ];

    public function favoris()
    {
        return $this->hasMany(Favoris::class);
    }

    public function publications()
    {
        return $this->hasMany(Publication::class);
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
