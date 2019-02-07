



<div id="scroller" class="nav-categoria nav-categoria--double-padding flex">  
					
	<div class="nav-categoria__left align-left" data-pushbar-target="side-nav">
		<svg class="icon icon-align" width="26" height="26" viewBox="0 0 26 19" fill="none" xmlns="http://www.w3.org/2000/svg">
			<rect width="26" height="3" fill="white"/>
			<rect width="13" height="3" transform="translate(0 8)" fill="white"/>
			<rect width="26" height="3" transform="translate(0 16)" fill="white"/>
		</svg>
		
		<a class="nav-categoria__nome"> Menu </a>
		

	</div>

	

	<div class="nav-categoria__right align-right">
		@php
			$url = url()->current();
		@endphp
		
			<a href="{{ url()->current()}}" class="nav-categoria__ordem {{(request()->order == 'recente' or request()->order == '' ) ? 'is-active' : ''}}">
				Recente
			</a> 

			<span> | </span>		

			<a href="{{ url()->current() .'?order=popular' }}" class="nav-categoria__ordem {{request()->order == 'popular' ? 'is-active' : ''}}">
				Popular
			</a>
	</div>
	
	
</div>
