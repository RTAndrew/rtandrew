<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    //










	// Texto Relationship
    public function texto()
    {
        return $this->belongsToMany('App\Texto');
    }

}
