@extends('layouts.textos')


@section('titulo-pagina')
 Texto - 
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