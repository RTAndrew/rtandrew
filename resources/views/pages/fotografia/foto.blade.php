@extends('layouts.fotografia')




@section('titulo-pagina')
 {{ $foto->titulo }} - 
@endsection


@section('metatags')


	<!--FACEBOOK-->
	    <meta property="og:image" content="{{ cloudinaryImagePath($foto->image_url, '') }}">
	    
	    <meta property="og:type" content="image" />
	    
	    <meta property="og:title" content="{{ $foto->titulo }}" />
		<meta property="og:description" content="{!! truncarMetaDescription($foto->descricao) !!}" />
	    <meta property="og:url" content="{{ route('foto', '$foto->slug') }}"/>


	<!-- TWITTER -->
		<meta name="twitter:card" content="summary" />
		{{-- <meta name="twitter:site" content="@PoetryFound" /> --}}
		<meta name="twitter:title" content="{{ $foto->titulo }}" />
		<meta name="twitter:description" content="{!! truncarMetaDescription($foto->descricao) !!}" />
		<meta name="twitter:image" content="{{ cloudinaryImagePath($foto->image_url, '') }}" />


@endsection





@section('content')


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
						{!! $foto->descricao !!}
					</p>
					

				</div>


			</div>

		</div>


	</div>




@endsection