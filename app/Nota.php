<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    // Schema is set in database config
    protected $table = 'notas';

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










	// Texto Relationship
    public function texto()
    {
        return $this->belongsToMany('App\Texto');
    }

}
