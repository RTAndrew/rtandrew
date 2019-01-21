
				<div id="justified-grid" class="justified-gallery justified-grid">
					
					@foreach ($fotos as $foto)
						<a href=" {{ route('foto', $foto->slug)}} ">
					        <img src="{{ $foto->image_url }}" alt="{{ $foto->titulo }}">
					    </a>
					@endforeach
					

				    
				    
				    
				    
				</div>


				{{ $fotos->links() }}
