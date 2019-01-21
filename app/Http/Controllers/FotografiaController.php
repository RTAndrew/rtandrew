<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Foto;
use App\Album;

class FotografiaController extends Controller
{
    


	public function fotografia($slug) {
		$albuns = Album::all();

		$foto = Foto::where('slug', $slug)->with('album')->firstOrFail();

		$foto->increment('view_count');
        
		// return $foto;

        return view('pages.fotografia.foto')
        ->with('foto', $foto)
        ->with('albuns', $albuns);

	}

	public function album($slug) {
		$albuns = Album::all();

		$album = Album::where('slug', $slug)->firstOrFail();

			$ft = DB::table('albuns')
				->join('foto_album', 'foto_album.album_id', '=', 'albuns.id')
				->join('fotos', 'fotos.id', '=', 'foto_album.foto_id')
				->where('albuns.slug', $slug)
				->select('fotos.id')
				->get();
			
			

			$ft_array = array();
				foreach ($ft as $ph) {
					array_push($ft_array, $ph->id);
				}

			$contagem_foto = $ft->count();

				// Pegar os textos de acordo com os IDs acima
				$fotos = Foto::whereIn('id', array_values($ft_array))
					->paginate(15);

		$album->increment('view_count');
        return view('pages.fotografia.album')
        ->with('fotos', $fotos)
        ->with('album', $album)
        ->with('contagem_foto', $contagem_foto)
        ->with('albuns', $albuns);

	}

	





}
