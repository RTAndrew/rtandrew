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
		

			@yield('content')
						
			
	</div>





@endsection












