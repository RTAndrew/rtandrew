@extends('layouts.textos')




@section('content')

	<div class="nota">
					
				<div class="container nota__hero">
				
						
						<h1 id="e" class="nota__titulo" style="border-color: {{ $categoria_color }};">
							{{ $categoria_nome }}
						</h1>
						



						<div id="i" class="nota__descricao e">
						
							{!! $categoria_descricao !!}

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