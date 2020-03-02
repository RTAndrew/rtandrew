@extends('layouts.main')


@section('main')


{{-- MAIN CONTENT  --}}
	{{-- PUSH BAR --}}
	<div class="pushbar_main_content">
		

		@section('side-navigation')
			@include('pages.fotografia.side-nav')
		@endsection
	
		<div class="foto-page">
			
				@yield('content')
							
		</div>

	</div>


	

	
	
	@section('script-full')
		{{-- Add class tag 
			on the Sidenav so the width variation
			doesnt affect the /textos
		--}}
		<script>
			var sideNav = document.querySelector('.pushbar');
			sideNav.classList.add("fotografia-sideBar");
		</script>
	@endsection

@endsection












