<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Foto;
use App\Texto;
use App\Nota;
use App\Projecto_txt;
use App\Album;

class PagesController extends Controller
{
    



	public function index() {

        return view('pages.landing-page');

	}
	public function sobre() {

        return view('pages.quem-sou-eu');

	}

	public function test() {

        return view('pages.test');

	}

	public function texto() {

		$textos = Texto::with('notas')->paginate(9);
		$notas = Nota::all();
		$projectos = Projecto_txt::all();

        return view('pages.texto.index')
	        ->with('textos', $textos)
	        ->with('notas', $notas)
	        ->with('projectos', $projectos);

	}

	

	public function fotografia() {
		
		$albuns = Album::all();
		$fotos = Foto::paginate(15);
        
        // return $albuns;

        return view('pages.fotografia.index')
        ->with('fotos', $fotos)
        ->with('albuns', $albuns);

	}







}
