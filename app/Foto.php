<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    //









	// Album Relationship
    public function album()
    {
        return $this->belongsToMany('App\Album', 'foto_album', 'foto_id', 'album_id');
    }
}