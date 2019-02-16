<div class="side-nav__section">
{{-- <h3 class="side-nav__titulo"> Álbuns </h3> --}}


	{{-- <a class="texto-categoria" href=" #">


		<span class="texto-categoria__midia" > 
			<img class="" src=" {{ asset('img/icons/exposition.svg') }} " alt="collection-midia--white">
		</span>
	

		<span class="side-nav__link"> Exposição </span>
		
	</a> --}}

	<a class="texto-categoria" href="{{ route('texto') }}">

		<span class="texto-categoria__midia" > 
			<img class="" src=" {{ asset('img/icons/text.svg') }} " alt="collection-midia--white">
		</span>
	

		<span class="side-nav__link active"> Ver Todos Textos </span>
		
	</a>

	{{-- <a class="texto-categoria" href="#">

		<span class="texto-categoria__midia" > 
			<img class="" src=" {{ asset('img/icons/star.svg') }} " alt="collection-midia--white">
		</span>
	

		<span class="side-nav__link"> Destacados </span>
		
	</a> --}}
	
	
</div>	

<div class="side-nav__section">

	<h3 class="side-nav__titulo"> Notas </h3>
	

	@foreach( $notas as $nota )

		<a class="texto-categoria" href="{{ route('textos.notas', $nota->slug) }}">


			<span class="texto-categoria__cor"  style="{{ $nota->background_color }}" > 
				
			</span>
		

			<span class="side-nav__link"> {{ $nota->nome }} </span>
			
		</a>

	@endforeach
									
</div>







{{-- <div class="side-nav__section">
	<h3 class="side-nav__titulo"> Midia </h3>
	
	@foreach( $projectos as $projecto )

		<a class="texto-categoria" href="{{ route('textos.projectos', $projecto->slug) }}">


			<span class="texto-categoria__midia" > 
				<img class="" src=" {{ asset('img/icons/image.svg') }} " alt="collection-midia--white">
			</span>
		

			<span class="side-nav__link"> {{ $projecto->nome }} </span>
			
		</a>
	
	@endforeach
</div>	 --}}