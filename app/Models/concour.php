<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Concour extends Model
{
    protected $fillable = ['titre', 'pdf', 'date', 'etablissment_id'];

    public function etablissment()
    {
        return $this->belongsTo(Etablissment::class);
    }
}

