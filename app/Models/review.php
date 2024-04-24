<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use SoftDeletes;

    protected $fillable = ['etablissment_id', 'note','user_id'];

    public function etablissment()
    {
        return $this->belongsTo(Etablissment::class);
    }
}

