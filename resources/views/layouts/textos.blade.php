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
			@yield('content')
		</div>

	</div>


	@section('script')
		{{-- Add Infinite Scroll--}}
		var elem = document.querySelector('.infinite-scroll-container');
		var infScroll = new InfiniteScroll( elem, {
			path: '.pagination__next',
			append: '.infinite-scroll-container',
			hideNav: '.pagination',
		});
		rodaxxx
	
	@endsection



@endsection