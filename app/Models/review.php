<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['etablissment_id', 'note','user_id'];

    public function etablissment()
    {
        return $this->belongsTo(Etablissment::class);
    }
}

