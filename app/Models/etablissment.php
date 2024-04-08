<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etablissment extends Model
{
    protected $fillable = ['nom', 'Formation', 'etudiants', 'Conditions', 'Filieres', 'concour', 'type', 'photo', 'description', 'lieu', 'domaine_id'];

    public function domaine()
    {
        return $this->belongsTo(Domaine::class);
    }

    public function concours()
    {
        return $this->hasMany(Concour::class);
    }

    public function favoris()
    {
        return $this->belongsToMany(User::class, 'favoris', 'etablissment_id', 'user_id');
    }
    public function etablissmentCommentaires()
    {
        return $this->morphMany(Commentaire::class, 'commentable');
    }
}

