<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function message()
    {
        return $this->hasMany('App\Message', 'categories_id');
    }
}
