<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sous_commentaire extends Model
{
    protected $fillable = ['contenue', 'commentaire_id'];

    public function commentaire()
    {
        return $this->belongsTo(Commentaire::class);
    }
}
