@extends('layouts.main')




@section('main')

	{{-- MAIN CONTENT  --}}
	{{-- PUSH BAR --}}
	<div class="pushbar_main_content">
		


		@section('side-navigation')

			@include('pages.texto.side-nav')

		@endsection
	





		{{-- TEXT_CONTAINER_PAGE --}}
		<div class="projecto-page">

			<div class="nota">
					
				<div class="container nota__hero">
				
						
						<h1 class="nota__titulo">
							{{ $projecto_titulo }}
						</h1>
						



						<p id="i" class="nota__descricao e">
						
							{{ $projecto_descricao }}

						</p>
						

				</div>	

			</div>

	

			
			<div class="container">
				
				@include('inc.navigation.nav-categoria')			

			
			</div>
			<div class="container">
				
				
				@include('inc.justified-grid')




			</div>

			






		</div>

	</div>
@endsection



@section('script')

		{{-- Change the Grid based on View Port Height --}}

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
					    rowHeight : 300,
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

