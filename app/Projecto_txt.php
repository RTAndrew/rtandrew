<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projecto_txt extends Model
{
	protected $table = 'projecto_txt';








    // Obter os Textos de Projecto
    public function texto_projecto()
    {
        return $this->hasMany('App\Texto_Projecto');
    }
}
