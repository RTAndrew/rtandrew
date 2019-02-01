<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Texto_Projecto extends Model
{
    //
    protected $table = 'texto_projecto';










    // Obter os Textos de Projecto
   	public function projecto_txt()
    {
        return $this->belongsTo('App\Projecto_txt');
    }
}
