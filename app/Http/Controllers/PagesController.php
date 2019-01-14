<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Texto;
use App\Nota;
use App\Projecto_txt;

class PagesController extends Controller
{
    



	public function index() {

        return view('pages.landing-page');

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
		

        return view('pages.fotografia.index');

	}





}
