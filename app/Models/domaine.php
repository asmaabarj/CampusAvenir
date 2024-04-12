<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    protected $fillable = ['titre', 'photo'];

    public function etablissements()
    {
        return $this->hasMany(Etablissment::class);
    }
}