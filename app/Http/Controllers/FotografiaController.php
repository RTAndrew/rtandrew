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
			$numberOfPhotos = $albuns->count();

		$foto = Foto::where('slug', $slug)->with('album')->firstOrFail();

		
		// $foto->increment('view_count');
		views($foto)
		    ->delayInSession(viewDelayTime())
		    ->record();

		    $foto->view_count = views($foto)->count();
		    $foto->save();
        
		// return $foto;

        return view('pages.fotografia.foto')
        ->with('foto', $foto)
        ->with('albuns', $albuns)
        ->with('numberOfPhotos', $numberOfPhotos);

	}

	public function album($slug) {
		$albuns = Album::all();

		$album = Album::where('slug', $slug)->firstOrFail();

			$fotoAlbumFetch = DB::table('albuns')
				->join('foto_album', 'foto_album.album_id', '=', 'albuns.id')
				->join('fotos', 'fotos.id', '=', 'foto_album.foto_id')
				->where('albuns.slug', $slug)
				->select('fotos.id')
				->get();
			
			
			// Empty Array Initialization
			$fotoAlbum_arrayOfIds = array();
				foreach ($fotoAlbumFetch as $ph) {
					array_push($fotoAlbum_arrayOfIds, $ph->id);
				}


			// Number of Photos in Album
			$numberOfPhotos = $fotoAlbumFetch->count();
				
				// Pegar os textos de acordo com os IDs acima
				$fotos = Foto::whereIn('id', array_values($fotoAlbum_arrayOfIds))
					->paginate(15);

		// $album->increment('view_count');
			views($album)
		    ->delayInSession(viewDelayTime())
		    ->record();

		    $album->view_count = views($album)->count();
			$album->save();
			
			
        return view('pages.fotografia.album')
        ->with('fotos', $fotos)
        ->with('album', $album)
        ->with('numberOfPhotos', $numberOfPhotos)
        ->with('albuns', $albuns);

	}

	





}
