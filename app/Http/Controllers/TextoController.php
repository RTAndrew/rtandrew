<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextoController extends Controller
{
    


	public function texto() {

        return view('pages.texto.texto');

	}

	public function projecto() {

        return view('pages.fotografia.album');

	}

	





}
