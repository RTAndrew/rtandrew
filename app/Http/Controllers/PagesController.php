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

        return view('pages.quem-sou-eu');

	}






	public function sobre() {

        return view('pages.quem-sou-eu');

	}






	public function test() {

        return view('pages.test');

	}






	public function texto() {

		$notas = Nota::all();
		$projectos = Projecto_txt::all();

		// Ordenar os resultados
		// Caso o REQUEST for recent, nao fazer nada
		if(request()->order == 'popular'){
			$textos = Texto::with('notas')
			->orderBy('view_count', 'desc')
			->paginate(9);
		} else {
			$textos = Texto::with('notas')
			->orderBy('created_at', 'desc')
			->paginate(9);
		}

		abort_if($textos->isEmpty(), 204);

        return view('pages.texto.index')
	        ->with('textos', $textos)
	        ->with('notas', $notas)
	        ->with('projectos', $projectos);

	}

	




	public function fotografia() {
		
		$albuns = Album::all();
			$numberOfPhotos = $albuns->count();

        
        // Ordenar os resultados
		// Caso o REQUEST for recent, nao fazer nada
		if(request()->order == 'popular'){
			$fotos = Foto::orderBy('view_count', 'desc')
			->paginate(15);
		} else {
			$fotos = Foto::orderBy('created_at', 'desc')
			->paginate(15);
		}

		// return $fotos;

        return view('pages.fotografia.index')
        ->with('fotos', $fotos)
		->with('albuns', $albuns)
		->with('numberOfPhotos', $numberOfPhotos);

	}







}
