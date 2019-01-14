<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    //
    protected $table  = 'albuns';










	// Foto Relationship
    public function foto()
    {
        return $this->belongsToMany('App\Foto');
    }
}
