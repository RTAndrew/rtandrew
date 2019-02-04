<?php

namespace App;

// Eloquent Viewable 
use CyrildeWit\EloquentViewable\Viewable;
use CyrildeWit\EloquentViewable\Contracts\Viewable as ViewableContract;

use Illuminate\Database\Eloquent\Model;

class Texto extends Model implements ViewableContract
{
    
    //Eloquent Viewable
		 use Viewable;



	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'view_count',  
    ];


	// Notas Relationship
    public function notas()
    {
        return $this->belongsToMany('App\Nota');
    }
}
