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

    // Schema is set in database config
    protected $table = 'textos';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'view_count',
    ];

    /**
     * Get a plain attribute
     */
    public function getAttributeValue($key)
    {
        $value = parent::getAttributeValue($key);

        // If it's a date field and has timezone, clean it
        if (in_array($key, $this->getDates()) && is_string($value)) {
            $value = preg_replace('/[+-]\d{2}(:\d{2})?$/', '', $value);
        }

        return $value;
    }

    /**
     * Return a timestamp as DateTime object.
     */
    protected function asDateTime($value)
    {
        if (is_string($value)) {
            // Remove timezone info before parsing
            $value = preg_replace('/[+-]\d{2}(:\d{2})?$/', '', $value);
        }

        return parent::asDateTime($value);
    }

	// Notas Relationship
    public function notas()
    {
        return $this->belongsToMany('App\Nota', 'rtandrew.nota_texto', 'texto_id', 'nota_id');
    }
}
