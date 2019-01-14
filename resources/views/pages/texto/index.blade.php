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
	

			
			<div class="container">
				
				@include('inc.navigation.nav-categoria')			

			
			</div>

			
			<div class="container">

				{{-- Grid Card --}}
				@include('components.cards.fullcard')


			</div>

			{{ $textos->links() }}






		</div>

	</div>





@endsection