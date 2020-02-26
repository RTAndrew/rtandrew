@extends('layouts.fotografia')

@section('json-ld')

	
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type":["ImageObject", "CreativeWork"],
		"author": {
			"@type": "Person",
			"name": "Rtandrew Paul"
		},
		"url":"{{ route('foto', $foto->slug)}}",
		"name":"{{ $foto->titulo }}",
		"caption": "{!! convertText2UTF($foto->descricao) !!}",
		"description": "{!! convertText2UTF($foto->descricao) !!}",
		"copyrightHolder": {
			"@type": "Person",
			"name": "Rtandrew Paul"
		},
		"keywords": [
	      "fotografia",
	      "cidade de luanda",
	      "fotografos angolanos",
	      "images of luanda"
	    ],
		"representativeOfPage": "True",
		"uploadDate": "{{ $foto->created_at }}",
		"dateCreated": "{{ $foto->created_at }}",
		"contentUrl": "{{ route('foto', $foto->slug)}}",
		"thumbnailUrl": "{{ cloudinaryImagePath($foto->image_url, '') }}",
		"thumbnail": "{{ cloudinaryImagePath($foto->image_url, '') }}",
		"interactionStatistic": {
		    "@type": "InteractionCounter",
		    "userInteractionCount": "{{ $foto->view_count }}"
		},
		"primaryImageOfPage": {
		    "@type": "ImageObject",
		    "thumbnail": "{{ cloudinaryImagePath($foto->image_url, '') }}"
		}
	}
	</script>

@endsection


@section('titulo-pagina')
 {{ $foto->titulo }} - 
@endsection


@section('metatags')


	<!--FACEBOOK-->
	    <meta property="og:image" content="{{ cloudinaryImagePath($foto->image_url, '') }}">
	    
	    <meta property="og:type" content="website" />
	    
	    <meta property="og:title" content="{{ $foto->titulo }}" />
		<meta property="og:description" content="{!! truncarMetaDescription($foto->descricao) !!}" />
	    <meta property="og:url" content="{{ route('foto', $foto->slug) }}"/>


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
						 Álbuns
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
			<center> <img src="{{ cloudinaryImagePath($foto->image_url, '') }}" alt="{{ $foto->titulo }}" title="{{ $foto->titulo }}"> </center>
		</div>

		<div class="foto__content">
			<div class="container">

				<div>
					@component('components.social-media-share')
						@slot('link')
							{{ route('foto', $foto->slug) }}
						@endslot
						
						@slot('titulo')
							{{ $foto->titulo }}
						@endslot
						
						@slot('descricao')
							{{ truncarMetaDescription($foto->descricao) }}
						@endslot

						@slot('imagem')
							{{ cloudinaryImagePath($foto->image_url, '') }}
						@endslot
					@endcomponent
				</div>

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