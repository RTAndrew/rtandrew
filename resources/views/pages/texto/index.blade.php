@extends('layouts.textos')





{{-- An ItemList to display rich snippets on google --}}
@section('json-ld')
	@include('components.json-ld.texto.to-render')
@endsection






@section('titulo-pagina-after')
 - Textos
@endsection


@section('metatags')

	<meta name="description" content="Textos em diferentes intensidades e categorizados em notas, e, como também, contos para apreciar em qualquer mood. ">

	<!--FACEBOOK-->
	    <meta property="og:image" content="{{ asset('img/opengraph-image.png') }}">
	    <meta property="og:image:type" content="image/png">
	    <meta property="og:type" content="website" />
	    <meta property="og:url" content="{{ route('texto') }}"/>
	    <meta property="og:title" content="{{ config('app.name', 'Rtandrew Paul') }}" />
		<meta property="og:description" content="Textos em diferentes intensidades e categorizados em notas, e, como também, contos para apreciar-se em qualquer mood." />

	<!-- TWITTER -->
		<meta name="twitter:card" content="summary" />
		{{-- <meta name="twitter:site" content="@PoetryFound" /> --}}
		<meta name="twitter:title" content="{{ config('app.name', 'Rtandrew Paul') }}" />
		<meta name="twitter:description" content="Textos em diferentes intensidades e categorizados em notas, e, como também, contos para apreciar em qualquer mood." />
		<meta name="twitter:image" content="{{ asset('img/opengraph-image.png') }}" />


@endsection






@section('content')

		<div class="container">
			
			@include('inc.navigation.nav-categoria')			


		</div>

		<div class="container">

			{{-- Grid Card --}}
			@include('components.cards.fullcard')


		</div>



@endsection