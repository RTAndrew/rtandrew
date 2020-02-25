@extends('layouts.textos')

@section('json-ld')

	<script type="application/ld+json">
		{
		    "@context":"http://schema.org",
		    "@type": ["BlogPosting", "CreativeWork", "ImageObject"],
		    "image": "{{ getTextoImage($texto->image_url) }}",
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
			},
			"primaryImageOfPage": {
			    "@type": "ImageObject",
			    "thumbnail": "{{ getTextoImage($texto->image_url) }}"
			},
			"thumbnailUrl": "{{ getTextoImage($texto->image_url) }}",
			"thumbnail": "{{ getTextoImage($texto->image_url) }}"
		}
	</script>

@endsection


@section('titulo-pagina')
	{{ $texto->titulo }} - 
@endsection


@section('metatags')


	<!--FACEBOOK-->
	    <meta property="og:image" content="{{ getTextoImage($texto->image_url) }}">
	    <meta property="og:image:type" content="image/png">
	    
	    <meta property="og:type" content="article" />

	    <meta property="og:title" content="{{ $texto->titulo }}" />
		<meta property="og:description" content="{!! truncarMetaDescription($texto->descricao) !!}">
	    <meta property="og:url" content="{{ route('textos.texto', $texto->slug) }}"/>


			<meta property="article:author" content="Rtandrew Paul" />
			<meta property="article:published_time" content="{{ $texto->created_at }}" />
			<meta property="article:modified_time" content="{{ $texto->updated_at }}" />
			<meta property="article:author" content="Rtandrew Paul" />


	<!-- TWITTER -->
		<meta name="twitter:card" content="summary" />
		{{-- <meta name="twitter:site" content="@PoetryFound" /> --}}
		<meta name="twitter:title" content="{{ $texto->titulo }}" />
		<meta name="twitter:description" content="{!! truncarMetaDescription($texto->descricao) !!}" />
		<meta name="twitter:image" content="{{ getTextoImage($texto->image_url) }}" />
@endsection




@section('content')





<div class="texto">
			

			<div class="texto__hero"  style="background: linear-gradient(
		      rgba(0, 0, 0, 0.70),
		      rgba(0, 0, 0, 0.70)
		    ), url('{{ getTextoImage($texto->image_url) }}') no-repeat center center fixed; 
		  -webkit-background-size: cover;">

				<div class="wrapper texto-with-image">
						<div class="left-side">
							<div class="texto__image">
								<img src="{{ getTextoImage($texto->image_url) }}" alt="{{ $texto->titulo }}" srcset="">
							</div>
						</div>

						<div class="right-side">
							<h1 class="texto__titulo texto-with-image wow animated fadeIn" data-wow-duration="1.7s" data-wow-delay="0.3s"> 
								{{ $texto->titulo }} 
							</h1>
						
							<div class="texto__details wow animated fadeIn" data-wow-duration="1.4s" data-wow-delay="0.6s">
								
								@if ($texto_categoria != null)	
									<a class="texto__categoria" href="{{ route('textos.notas', $texto_categoria->slug) }}"> 
										<img class="icon" src="{{ asset('img/icons/tags.svg') }}" alt="tags_icon">
										<p> {{ $texto_categoria->nome }} </p>
									</a>
								@endif
								<div class="texto__views"> 
									<img class="icon" src="{{ asset('img/icons/eye.svg') }} " alt="eye_icon">
									<p> {{ romanNumerals($texto->view_count) }} </p>
								</div>
							</div>

							<div class="wow animated fadeIn" data-wow-duration="1.4s" data-wow-delay="0.7s">	
								@component('components.social-media-share')
									@slot('link')
										{{ route('textos.texto', $texto->slug) }}
									@endslot
									
									@slot('titulo')
										{{ $texto->titulo }}
									@endslot
									
									@slot('descricao')
										{{ truncarMetaDescription($texto->descricao) }}
									@endslot
	
									@slot('imagem')
										{{ asset(getSiteIdentityImage()) }}
									@endslot
								@endcomponent
							</div>	 
						</div>

						
				</div>
				
			</div>

			<div class="texto__content">
				
				<div class="texto__descricao-wrapper wow slideInUp"  data-wow-duration="1.3s" data-wow-delay="0s">
					<div class="texto__descricao texto-with-image wow fadeIn"  data-wow-duration="1s" data-wow-delay="1.18s">
						<p>
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