<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $fillable = ['contenue', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commentable()
    {
        return $this->morphTo();
    }

    public function sousCommentaires()
    {
        return $this->hasMany(Sous_Commentaire::class);
    }
}
