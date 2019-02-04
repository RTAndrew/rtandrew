<?php

namespace App;

// Eloquent Viewable 
use CyrildeWit\EloquentViewable\Viewable;
use CyrildeWit\EloquentViewable\Contracts\Viewable as ViewableContract;


use Illuminate\Database\Eloquent\Model;

class Foto extends Model implements ViewableContract
{
    //Eloquent Viewable
		 use Viewable;








	// Album Relationship
    public function album()
    {
        return $this->belongsToMany('App\Album', 'foto_album', 'foto_id', 'album_id');
    }
}
