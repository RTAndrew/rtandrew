@extends('layouts.fotografia')





{{-- An ItemList to display rich snippets on google --}}
@section('json-ld')
	@include('components.json-ld.fotografia.to-render')
@endsection







@section('titulo-pagina-after')
 - Fotografias
@endsection


@section('metatags')
	<meta name="description" content="Fotografias capturadas com a câmera e telemóvel, junto de sua experiência ou aventura vivida.">

	<!--FACEBOOK-->
	    <meta property="og:image" content="{{ asset(getSiteIdentityImage()) }}">
	    <meta property="og:image:type" content="image/png">
	    <meta property="og:type" content="website" />
	    <meta property="og:url" content="{{ route('fotografia') }}"/>
	    <meta property="og:title" content="{{ config('app.name', 'Rtandrew Paul') }}" />
		<meta property="og:description" content="Fotografias capturadas com a câmera e telemóvel, junto de sua experiência ou aventura vivida." />

	<!-- TWITTER -->
		<meta name="twitter:card" content="summary" />
		{{-- <meta name="twitter:site" content="@PoetryFound" /> --}}
		<meta name="twitter:title" content="{{ config('app.name', 'Rtandrew Paul') }}" />
		<meta name="twitter:description" content="Fotografias capturadas com a câmera e telemóvel, junto de sua experiência ou aventura vivida." />
		<meta name="twitter:image" content="{{ asset(getSiteIdentityImage()) }}" />


@endsection







@section('content')

	
	<div class="container">
			
		@include('inc.navigation.nav-categoria')

			
	</div>


	<div class="container">
		@include('inc.justified-grid')			
	</div>



@endsection


@section('script')

		{{-- Change the Grid based on View Port Width --}}

		function myFunction(x) {
		    if (x.matches) { // If media query matches
		        $('#justified-grid').justifiedGallery({
					    rowHeight : 200,
					    lastRow : 'nojustify',
					    margins : 5,
					    captions : false
					});
		    } else {
		        $('#justified-grid').justifiedGallery({
					    rowHeight : 235,
					    lastRow : 'nojustify',
					    margins : 10,
					    captions : false
					});
		    }
		}

		var x = window.matchMedia("(max-width: 700px)")
		myFunction(x) // Call listener function at run time
		x.addListener(myFunction) // Attach listener function on state changes

@endsection