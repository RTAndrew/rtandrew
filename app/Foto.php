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

    // Schema is set in database config
    protected $table = 'fotos';

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








	// Album Relationship
    public function album()
    {
        return $this->belongsToMany('App\Album', 'foto_album', 'foto_id', 'album_id');
    }
}
