<?php

namespace App\Models;

use App\Models\Etablissment;
use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    protected $fillable = ['titre', 'photo','description'];

    public function etablissements()
    {
        return $this->hasMany(Etablissment::class);
    }
}