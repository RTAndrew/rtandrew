@extends('layouts.textos')




{{-- An ItemList to display rich snippets on google --}}
@section('json-ld')
	@include('components.json-ld.texto.to-render')
@endsection






@section('titulo-pagina')
	{{ $categoria->nome }} - 
@endsection


@section('metatags')


	<!--FACEBOOK-->
	    <meta property="og:image" content="{{ asset(getSiteIdentityImage()) }}">
	    <meta property="og:image:type" content="image/png">
	    
	    <meta property="og:locale" content="pt_PT" />
	    <meta property="og:type" content="article" />

	    <meta property="og:title" content="{{ $categoria->nome }}" />
		<meta property="og:description" content="{!! truncarMetaDescription($categoria->descricao) !!}">
	    <meta property="og:url" content="{{ route('textos.texto', $categoria->slug) }}"/>


			<meta property="article:author" content="Rtandrew Paul" />
			<meta property="article:published_time" content="{{ $categoria->created_at }}" />
			<meta property="article:modified_time" content="{{ $categoria->updated_at }}" />
			<meta property="article:author" content="Rtandrew Paul" />


	<!-- TWITTER -->
		<meta name="twitter:card" content="summary" />
		{{-- <meta name="twitter:site" content="@PoetryFound" /> --}}
		<meta name="twitter:title" content="{{ $categoria->nome }}" />
		<meta name="twitter:description" content="{!! truncarMetaDescription($categoria->descricao) !!}" />
		<meta name="twitter:image" content="{{ asset('img/opengraph-image.png') }}" />
@endsection



@section('content')

	<div class="nota">
					
				<div class="container nota__hero">
				
						
						<h1 id="e" class="nota__titulo" style="border-color: {{ $categoria->background_color_fallback }};">
							{{ $categoria->nome }}
						</h1>
						



						<div id="i" class="nota__descricao e">
						
							{!! $categoria->descricao !!}

						</div>
						

				</div>	

			</div>

	

			
			<div class="container">
				
				@include('inc.navigation.nav-categoria')			

			
			</div>
			<div class="container">
				

				{{-- APRESENTAR A GRID --}}
				{{-- DOS CARDS RELACIONADOS --}}
					@include('components.cards.fullcard')



			</div>

			{{ $textos->links() }}


@endsection