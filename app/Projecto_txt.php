<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projecto_txt extends Model
{
	protected $table = 'projecto_txt';

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








    // Obter os Textos de Projecto
    public function texto_projecto()
    {
        return $this->hasMany('App\Texto_Projecto');
    }
}
