<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Texto extends Model
{
    //










	// Notas Relationship
    public function notas()
    {
        return $this->belongsToMany('App\Nota');
    }
}
