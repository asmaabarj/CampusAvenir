<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favori extends Model
{
    protected $fillable = ['user_id', 'etablissment_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function etablissment()
    {
        return $this->belongsTo(Etablissment::class);
    }
}
