@extends('layouts.textos')

@section('json-ld')

	<script type="application/ld+json">
		{
		    "@context":"http://schema.org",
		    "@type": ["BlogPosting", "CreativeWork"],
		    "image": "http://rtandrew.com/img/opengraph-image.png",
		    "url": "{{ route('textos.texto', $texto->slug) }}",
		    "headline": "{{ $texto->titulo }}",
		    "dateCreated": "{{ $texto->created_at }}",
		    "datePublished": "{{ $texto->created_at }}",
		    "dateModified": "{{ $texto->updated_at }}",
		    "inLanguage": "pt",
		    "copyrightYear": "{{ date('Y') }}",
		    "copyrightHolder": {
				"@type": "Person",
				"name": "Rtandrew Paul"
			},
		    "contentLocation": {
		      "@type": "Place",
		      "name": "Luanda, Angola"
		    },
		    "author": {
		      "@type": "Organization",
		      "name": "Rtandrew Paul"
		    },
		    "creator": {
		      "@type": "Person",
		      "name": "Rtandrew Paul"
		    },
		    "publisher": {
				"@type": "Organization",
				"name": "Rtandrew Paul",
				"url": "{{ url('/') }}",
				"logo": {
					"@type": "ImageObject",
					"url": "{{ asset('img/logo-black.svg') }}"
				}
			},
		    "mainEntityOfPage": "True",
		    "keywords": [
		      "textos",
		      "poemas angolanos",
		      "pensamentos",
		      "poesia",
		      "poema de escritores angolanos",
		      "prosa"
		    ],
		    "articleBody": "{!! convertText2UTF($texto->descricao) !!}",
		    "interactionStatistic": {
			    "@type": "InteractionCounter",
			    "userInteractionCount": "{{ $texto->view_count }}"
			}
		}
	</script>

@endsection


@section('titulo-pagina')
	{{ $texto->titulo }} - 
@endsection


@section('metatags')


	<!--FACEBOOK-->
	    <meta property="og:image" content="{{ asset('img/opengraph-image.png') }}">
	    <meta property="og:image:type" content="image/png">
	    
	    <meta property="og:type" content="article" />

	    <meta property="og:title" content="{{ $texto->titulo }}" />
		<meta property="og:description" content="{!! truncarMetaDescription($texto->descricao) !!}">
	    <meta property="og:url" content="{{ route('textos.notas', $texto->slug) }}"/>


			<meta property="article:author" content="Rtandrew Paul" />
			<meta property="article:published_time" content="{{ $texto->created_at }}" />
			<meta property="article:modified_time" content="{{ $texto->updated_at }}" />
			<meta property="article:author" content="Rtandrew Paul" />


	<!-- TWITTER -->
		<meta name="twitter:card" content="summary" />
		{{-- <meta name="twitter:site" content="@PoetryFound" /> --}}
		<meta name="twitter:title" content="{{ $texto->titulo }}" />
		<meta name="twitter:description" content="{!! truncarMetaDescription($texto->descricao) !!}" />
		<meta name="twitter:image" content="{{ asset('img/opengraph-image.png') }}" />
@endsection




@section('content')





<div class="texto">
			

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
			<div class="texto__hero">
				
					<h1 class="texto__titulo wow animated fadeIn" data-wow-duration="1.7s" data-wow-delay="0.3s"> 
						{{ $texto->titulo }} 
					</h1>
				
					@if( $texto_categoria != null) 

						<div class=" wow fadeIn"  data-wow-duration="1.4s" data-wow-delay="0.6s">

							@component('components.nav-categoria--simple')
							
							{{-- Lado Esquerdo --}}					
								@slot('categoria')
									{{ $texto_categoria->nome }}
								@endslot
								
								@slot('icon')
									<svg class="icon" width="25" height="22" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<ellipse cx="12.0926" cy="11" rx="12.0926" ry="11" fill="{{ $texto_categoria->background_color_fallback }}"/>
									</svg>

								@endslot


								
							{{-- Lado Direito --}}
								@slot('categoria2')
									{{ romanNumerals($texto->view_count) }}
								@endslot
								
								@slot('icon2')
									<svg class="icon" width="92" height="58" viewBox="0 0 92 58" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M0 29C7.45946 12.3404 25.4865 0 46 0C67.1351 0 85.1622 11.7234 92 29C84.5405 45.6596 66.5135 58 46 58C24.8649 58 6.83784 46.2766 0 29ZM46 8.6383C57.1892 8.6383 66.5135 17.8936 66.5135 29C66.5135 40.1064 57.1892 49.3617 46 49.3617C34.8108 49.3617 25.4865 40.1064 25.4865 29C25.4865 17.8936 34.8108 8.6383 46 8.6383Z" fill="{{ $texto_categoria->background_color_fallback }}"/>
										<path fill-rule="evenodd" clip-rule="evenodd" d="M11.8108 0C18.6486 0 23.6216 5.55319 23.6216 11.7234C23.6216 18.5106 18.027 23.4468 11.8108 23.4468C4.97297 23.4468 0 17.8936 0 11.7234C0 4.93617 5.59459 0 11.8108 0Z" transform="translate(34.1892 16.6596)" fill="{{ $texto_categoria->background_color_fallback }}"/>
									</svg>
								@endslot


							@endcomponent

						</div>

					@else
						<div class=" wow fadeIn"  data-wow-duration="1.4s" data-wow-delay="0.6s">

							@component('components.nav-categoria--simple')
							
							{{-- Lado Esquerdo --}}					
								@slot('categoria')
									{{ romanNumerals($texto->view_count) }}
								@endslot
								
								@slot('icon')
									<svg class="icon" width="92" height="58" viewBox="0 0 92 58" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M0 29C7.45946 12.3404 25.4865 0 46 0C67.1351 0 85.1622 11.7234 92 29C84.5405 45.6596 66.5135 58 46 58C24.8649 58 6.83784 46.2766 0 29ZM46 8.6383C57.1892 8.6383 66.5135 17.8936 66.5135 29C66.5135 40.1064 57.1892 49.3617 46 49.3617C34.8108 49.3617 25.4865 40.1064 25.4865 29C25.4865 17.8936 34.8108 8.6383 46 8.6383Z" fill="white"/>
										<path fill-rule="evenodd" clip-rule="evenodd" d="M11.8108 0C18.6486 0 23.6216 5.55319 23.6216 11.7234C23.6216 18.5106 18.027 23.4468 11.8108 23.4468C4.97297 23.4468 0 17.8936 0 11.7234C0 4.93617 5.59459 0 11.8108 0Z" transform="translate(34.1892 16.6596)" fill="white"/>
									</svg>

								@endslot


								
							{{-- Lado Direito --}}
								@slot('categoria2')
									
								@endslot
								
								@slot('icon2')
									
								@endslot


							@endcomponent

						</div>
					@endif
				
				
			
				
			</div>

			<div class="texto__content">
				
					

				<div class="texto__descricao-wrapper wow slideInUp"  data-wow-duration="1.3s" data-wow-delay="0s">
						
					<div class="texto__descricao wow fadeIn"  data-wow-duration="0.50s" data-wow-delay="1.14s">
						
						{{-- <h2 class="texto__titulo--small"> Valeria </h2> --}}
						<p >
							{!! $texto->descricao !!}
						</p>

					</div>

				</div>



				<div class="container">
					@if ($textos->count() != 0)
						
					<h2 class="texto__relacionados"> Textos relacionados </h2>
					{{-- APRESENTAR A GRID --}}
					{{-- DOS CARDS RELACIONADOS --}}
						@include('components.cards.smallcard')
					@else
					<br>
					<br>
					<br>
					
					@endif

				            
		

					</div>
				</div>

			</div>


		</div>















@endsection