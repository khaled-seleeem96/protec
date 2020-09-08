<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    
    public function category()
    {
        return $this->belongsTo('App\Categorie', 'categories_id');
    }
    public function client()
    {
        return $this->belongsTo('App\User', 'client_id');
    }
    public function checker()
    {
        return $this->belongsTo('App\User', 'checked_by');
    }
    public function status_done()
    {
        return $this->belongsTo('App\User', 'done_by');
    }
}
