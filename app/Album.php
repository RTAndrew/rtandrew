<?php

namespace App;

// Eloquent Viewable 
use CyrildeWit\EloquentViewable\Viewable;
use CyrildeWit\EloquentViewable\Contracts\Viewable as ViewableContract;

use Illuminate\Database\Eloquent\Model;

class Album extends Model implements ViewableContract
{
    //Eloquent Viewable
		 use Viewable;

  
    protected $table  = 'albuns';






	// Foto Relationship
    public function foto()
    {
        return $this->belongsToMany('App\Foto', 'foto_album', 'album_id', 'foto_id');
    }
}
