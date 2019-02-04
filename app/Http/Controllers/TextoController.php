<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Texto;
use App\Nota;
use App\Projecto_txt;

class TextoController extends Controller
{
    
	

	public function textoSlug($slug) {
		$notas = Nota::all();
		$projectos = Projecto_txt::all();



		$texto = Texto::where('slug', $slug)->firstOrFail();

			// Declarar como um array vazio
			// Para caso o $texto_categoria estiver vazio
				$texto_categoria = array();
		
			// Pegar Simplesmente uma unica categoria
			foreach ($texto->notas as $nota) {
				$texto_categoria = $nota;
				break;
			}


			// Pegar os IDs das Notas
				$notaArrayOfIds = array();

			foreach ($texto->notas as $nota) {
				array_push($notaArrayOfIds, $nota->id);
			}




		//Pegar textos relacionados de acordo com o ARRAY DAS NOTAS

		if ($texto_categoria != null) {

			$texto_fetch = DB::table('nota_texto')
			->join('textos', 'textos.id', '=', 'nota_texto.texto_id')
			->join('notas', 'notas.id', '=', 'nota_texto.nota_id')
			
			// Productos relacionados
				->where('nota_id', array_values($notaArrayOfIds))
			//Excepto aqueles que contem o mesmo nome
				->whereNotIn('titulo', [$texto->titulo])

			->take(4)
			->select('textos.*', 'notas.background_color')
			->get();  

			// Armazenar os ids dos textos
			$textoArrayOfIds = array();
			
				foreach ($texto_fetch as $txt) {
					array_push($textoArrayOfIds, $txt->id);
				}


			// Pegar os textos de acordo com os IDs acima
			$textosRelacionados = Texto::whereIn('id', array_values($textoArrayOfIds))
				->take(4)
				->inRandomOrder()
				->get();


		} else {
			$textosRelacionados = Texto::whereNotIn('titulo', [$texto->titulo])
				->take(4)
				->inRandomOrder()
				->get();
			
		}
		



		// Incrementar o numero de view
			// deprecated code
    		// $texto->increment('view_count');
			views($texto)
		    ->delayInSession(viewDelayTime())
		    ->record();

		    $texto->view_count = views($texto)->count();
		    $texto->save();

        return view('pages.texto.texto')
	        ->with('texto_categoria', $texto_categoria)
	        ->with('texto', $texto)
	        ->with('textos', $textosRelacionados)
	        ->with('notas', $notas)
	        ->with('projectos', $projectos);

	}











	public function notaSlug($slug){
		$notas = Nota::all();
		$projectos = Projecto_txt::all();



		$categoria = Nota::where('slug', $slug)->firstOrFail();
			$categoria_color = $categoria->background_color_fallback;
			$categoria_nome = $categoria->nome;
			$categoria_descricao = $categoria->descricao;




		// return $categoria_nome;
		$texto_fetch = DB::table('nota_texto')
			->join('textos', 'textos.id', '=', 'nota_texto.texto_id')
			->join('notas', 'notas.id', '=', 'nota_texto.nota_id')
			
			// Productos relacionados
				->where('notas.slug', $slug)
			//Excepto aqueles que contem o mesmo nome
				// ->whereNotIn('titulo', [$texto->titulo])

			// ->take(4)
			->select('textos.id')
			->get();  


			// Armazenar os ids dos textos
			$textoArrayOfIds = array();
			foreach ($texto_fetch as $txt) {
				array_push($textoArrayOfIds, $txt->id);
			}


			// Pegar os textos de acordo com os IDs acima

			if(request()->order == 'popular'){
				$textos = Texto::whereIn('id', array_values($textoArrayOfIds))
				->orderBy('view_count', 'desc')
				->paginate(9);
			} else {
				$textos = Texto::whereIn('id', array_values($textoArrayOfIds))
				->paginate(9);
			}

			// return $textos;
			return view('pages.texto.notas')
	        ->with('categoria_color', $categoria_color)
	        ->with('categoria_nome', $categoria_nome)
	        ->with('categoria_descricao', $categoria_descricao)
	        ->with('notas', $notas)
	        ->with('textos', $textos)
	        ->with('projectos', $projectos);

	}

	










	public function projectoSlug($slug) {
		$notas = Nota::all();
		$projectos = Projecto_txt::all();

		// Variavel modificada para PROJECTOS
		$projecto_find = Projecto_txt::where('slug', $slug)->firstOrFail();

		$projecto_fetch = DB::table('projecto_txt')
			->join('texto_projecto', 'texto_projecto.projecto_txt_id', '=', 'projecto_txt.id')
			
			// Productos relacionados
				->where('projecto_txt.slug', $slug)
			//Excepto aqueles que contem o mesmo nome
				// ->whereNotIn('titulo', [$texto->titulo])

			// ->take(4)
			->select('texto_projecto.titulo', 'texto_projecto.slug', 'texto_projecto.image_url')
			->paginate(9);

				
        return view('pages.texto.projectos')
        ->with('projecto_titulo', $projecto_find->nome)
        ->with('projecto_descricao', $projecto_find->descricao)
	    ->with('projecto_fetch', $projecto_fetch)
        ->with('notas', $notas)
        ->with('projectos', $projectos);

	}
}
