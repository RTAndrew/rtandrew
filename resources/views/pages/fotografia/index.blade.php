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
		
		<div class="container">
			
			@include('inc.navigation.nav-categoria')

			
		</div>

		<div class="container">
			
			@include('inc.justified-grid')			
		</div>

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
