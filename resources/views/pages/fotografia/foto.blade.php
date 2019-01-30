@extends('layouts.main')




@section('main')

{{-- MAIN CONTENT  --}}
	{{-- PUSH BAR --}}
	<div class="pushbar_main_content">
		

		@section('side-navigation')

			@include('pages.fotografia.side-nav')


		@endsection
	

	</div>



<div class="foto-page">
	


	<div class="foto">
		<div class="container">
				@component('components.nav-categoria--full')
				
				{{-- Lado Esquerdo --}}					
					@slot('categoria')
						 Menu
					@endslot
					
					@slot('icon')
						<svg class="icon icon-align" width="26" height="26" viewBox="0 0 26 19" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="26" height="3" fill="white"/>
							<rect width="13" height="3" transform="translate(0 8)" fill="white"/>
							<rect width="26" height="3" transform="translate(0 16)" fill="white"/>
						</svg>
					@endslot



				{{-- Lado Direito --}}
					@slot('categoria2')
						
					@endslot
					
					@slot('icon2')
						
					@endslot


				@endcomponent
		</div>
		
		<div class="foto__hero">
			<center> <img src="{{ cloudinaryImagePath($foto->image_url, '') }}" alt="{{ $foto->titulo }}"> </center>
		</div>

		<div class="foto__content">
			<div class="container">

				@if ($foto->album->count() > 0 )
					
					<div class="foto__album">
						<span> Presente no álbum: </span>
						
						@foreach ($foto->album as $album)
							<a class="foto__album-link" href="{{ route('album', $album->slug) }}">  {{ $album->titulo }} </a>
						@endforeach

					</div>
					
				@endif
				

				<h1 class="foto__titulo">
					{{ $foto->titulo }}
				</h1>
				

				<div class="foto__descricao">
					
					<p>
						{{ $foto->descricao }}
					</p>
					

				</div>


			</div>

		</div>


	</div>

	





</div>















@endsection