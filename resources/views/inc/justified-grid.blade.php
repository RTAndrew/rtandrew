
	{{-- Somente para Fotografias --}}
		@isset ($fotos)
		    
			<div id="justified-grid" class="justified-gallery justified-grid">
				
				@foreach ($fotos as $foto)
					<a href=" {{ route('foto', $foto->slug)}} ">
				        <img src="{{ cloudinaryImagePath($foto->image_url, '20') }}" alt="{{ $foto->titulo }}" title="{{ $foto->titulo }}">
				    </a>
				@endforeach
				

			</div>


			{{ $fotos->appends(request()->input())->onEachSide(5)->links() }}
		
		@endisset



		{{-- Somente para projecto dos TEXTOS --}}
		@isset ($prjs)
		    
			<div id="justified-grid" class="justified-gallery justified-grid">
				
				@foreach ($prjs as $projecto)
					<a href=" {{ route('textos.projectos', $projecto->slug)}} ">
				        <img src="{{ cloudinaryImagePath($projecto->image_url, '20') }}" alt="{{ $projecto->titulo }}" title="{{ $projecto->titulo }}">
				    </a>
				@endforeach
				

			</div>


			{{ $prjs->appends(request()->input())->onEachSide(5)->links() }}
		
		@endisset
