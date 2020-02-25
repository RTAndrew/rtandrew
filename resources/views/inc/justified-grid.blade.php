
	{{-- Somente para Fotografias --}}
		@isset ($fotos)
		    
			<div id="justified-grid" class="justified-gallery justified-grid infinite-scroll-container">
				
				@foreach ($fotos as $foto)
					<a  class="foto__wrapper" href=" {{ route('foto', $foto->slug)}} ">

						@if ($foto->featured != 0)
							<span class="newpost-tag"> 
								<img class="newpost-tag__icon" src="{{ asset('img/icons/star--green.svg') }}" alt="star-destacado"> 
							</span>
						@endif

				        <img src="{{ cloudinaryImagePath($foto->image_url, '20') }}" alt="{{ $foto->titulo }}" title="{{ $foto->titulo }}">

				        <span class="foto__titulo"> <p> {{ $foto->titulo }} </p> </span>
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
