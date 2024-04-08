<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    protected $fillable = ['nom', 'photo'];

    public function etablissements()
    {
        return $this->hasMany(Etablissment::class);
    }
}