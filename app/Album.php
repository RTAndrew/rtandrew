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

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * Parse dates to remove timezone info
     */
    public function fromDateTime($value)
    {
        if (is_string($value)) {
            // Remove timezone info (+00, -05:00, etc.)
            $value = preg_replace('/[+-]\d{1,2}(:\d{2})?$/', '', $value);
        }
        return parent::fromDateTime($value);
    }






	// Foto Relationship
    public function foto()
    {
        return $this->belongsToMany('App\Foto', 'foto_album', 'album_id', 'foto_id');
    }
}
