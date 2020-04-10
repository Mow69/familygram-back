<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function auteur()
    {
        return $this->belongsTo("App\User", "user_id");
    }

    public function categorie()
    {
        return $this->belongsTo("App\Categorie");
    }

    public function likes()
    {
        return $this->belongsToMany("App\User", "likes");
    }

    public function userliked()
    {
        return $this->likes->pluck("id")->contains(auth()->user()->id);
    }
}
