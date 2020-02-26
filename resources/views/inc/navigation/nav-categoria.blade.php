



<div id="scroller" class="nav-categoria nav-categoria--double-padding flex">  
					
	<div class="nav-categoria__left align-left" data-pushbar-target="side-nav">
		
		<a class="nav-categoria__nome pulse-awareness"> 
			{{-- Check if the route is Text or Photo --}}
			@if (Request::is('texto') || Request::is('texto/*'))
				Notas
			@endif

			@if (Request::is('fotografia') || Request::is('fotografia/*'))
				Álbuns
			@endif 
		</a>

	</div>

	

	<div class="nav-categoria__right align-right">
		@php
			$url = url()->current();
		@endphp
		
			<a href="{{ url()->current()}}" class="nav-categoria__ordem {{(request()->order == 'recente' or request()->order == '' ) ? 'is-active' : ''}}">
				Recente
			</a> 

			<span> | </span>		

			<a rel="canonical" href="{{ url()->current() .'?order=popular' }}" class="nav-categoria__ordem {{request()->order == 'popular' ? 'is-active' : ''}}">
				Popular
			</a>
	</div>
	
	
</div>
