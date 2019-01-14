@extends('layouts.main')




@section('main')

	{{-- MAIN CONTENT  --}}
	{{-- PUSH BAR --}}
	<div class="pushbar_main_content">
		


		@section('side-navigation')

			@include('pages.texto.side-nav')

		@endsection
	

































		{{-- TEXT_CONTAINER_PAGE --}}
		<div class="text-page">

			<div class="nota">
					
				<div class="container nota__hero">
				
						
						<h1 id="e" class="nota__titulo" style="border-left: 8px solid {{ $categoria_color }};">
							{{ $categoria_nome }}
						</h1>
						



						<p id="i" class="nota__descricao e">
						
							{{ $categoria_descricao }}

						</p>
						

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






		</div>

	</div>





@endsection