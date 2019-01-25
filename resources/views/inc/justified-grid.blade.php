
	{{-- Somente para Fotografias --}}
		@isset ($fotos)
		    
			<div id="justified-grid" class="justified-gallery justified-grid">
				
				@foreach ($fotos as $foto)
					<a href=" {{ route('foto', $foto->slug)}} ">
				        <img src="{{ $foto->image_url }}" alt="{{ $foto->titulo }}">
				    </a>
				@endforeach
				

			</div>


			{{ $fotos->links() }}
		
		@endisset



		{{-- Somente para projecto dos TEXTOS --}}
		@isset ($prjs)
		    
			<div id="justified-grid" class="justified-gallery justified-grid">
				
				@foreach ($prjs as $projecto)
					<a href=" {{ route('textos.projectos', $projecto->slug)}} ">
				        <img src="{{ $projecto->image_url }}" alt="{{ $projecto->titulo }}">
				    </a>
				@endforeach
				

			</div>


			{{ $prjs->links() }}
		
		@endisset
