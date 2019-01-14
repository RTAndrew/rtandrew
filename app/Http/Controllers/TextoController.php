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
		$texto = Texto::where('slug', $slug)->firstOrFail();

			// Declarar como um array vazio
			// Para caso o $texto_categoria estiver vazio
				$texto_categoria = array();
		
			// Pegar Simplesmente uma unica categoria
			foreach ($texto->notas as $nota) {
				$i = 0;

					if ($i == 0) {
						$texto_categoria = $nota;
						// $texto_categoriai = $nota->id;
						$i++;
						break;
					}
			}


			// Pegar os IDs das Notas
			$a = array();
			foreach ($texto->notas as $nota) {
				
			array_push($a, $nota->id);

			}



		//Pegar textos relacionados de acordo com o ARRAY DAS NOTAS

		if ($texto_categoria != null) {

			$txt = DB::table('nota_texto')
			->join('textos', 'textos.id', '=', 'nota_texto.texto_id')
			->join('notas', 'notas.id', '=', 'nota_texto.nota_id')
			
			// Productos relacionados
				->where('nota_id', array_values($a))
			//Excepto aqueles que contem o mesmo nome
				->whereNotIn('titulo', [$texto->titulo])

			->take(4)
			->select('textos.*', 'notas.background_color')
			->get();  

			// Armazenar os ids dos textos
			$txt_array = array();
			foreach ($txt as $txt) {
				array_push($txt_array, $txt->id);
			}


			// Pegar os textos de acordo com os IDs acima
			$textosRelacionados = Texto::whereIn('id', array_values($txt_array))
				->take(4)
				->inRandomOrder()
				->get();

			// Caso não haver textos da mesma categoria
			
				// return $textosRelacionados;
			


		} else {
			$textosRelacionados = Texto::whereNotIn('titulo', [$texto->titulo])
				->take(4)
				->inRandomOrder()
				->get();
			
		}
		



		// Incrementar o numero de view
    		$texto->increment('view_count');

        return view('pages.texto.texto')
	        ->with('texto_categoria', $texto_categoria)
	        ->with('texto', $texto)
	        ->with('textos', $textosRelacionados);

	}











	public function projectoSlug() {

        return view('pages.fotografia.album');

	}



	public function notaSlug($slug){
		$notas = Nota::all();
		$projectos = Projecto_txt::all();

		$categoria = Nota::where('slug', $slug)->firstOrFail();
			$categoria_color = $categoria->background_color_fallback;
			$categoria_nome = $categoria->nome;
			$categoria_descricao = $categoria->descricao;

		// return $categoria_nome;
		$txt = DB::table('nota_texto')
			->join('textos', 'textos.id', '=', 'nota_texto.texto_id')
			->join('notas', 'notas.id', '=', 'nota_texto.nota_id')
			
			// Productos relacionados
				->whereNot('notas.slug', $slug)
			//Excepto aqueles que contem o mesmo nome
				->whereNotIn('titulo', [$texto->titulo])

			->take(4)
			->select('textos.id')
			->get();  


			// Armazenar os ids dos textos
			$txt_array = array();
			foreach ($txt as $txt) {
				array_push($txt_array, $txt->id);
			}

				// return array_values($txt_array);

			// Pegar os textos de acordo com os IDs acima
			$textos = Texto::whereIn('id', array_values($txt_array))
				->paginate(9);

			// return $textos;
			return view('pages.texto.notas')
	        ->with('categoria_color', $categoria_color)
	        ->with('categoria_nome', $categoria_nome)
	        ->with('categoria_descricao', $categoria_descricao)
	        ->with('notas', $notas)
	        ->with('textos', $textos)
	        ->with('projectos', $projectos);

				// return $textosRelacionados;
	}

	





}
