{{-- ASIDE NAVIGATION --}}
			{{-- PUSHBAR JS --}}
		    <div data-pushbar-id="side-nav" class="pushbar from_left side-nav">
		    		
					<center> 
						<div class="side-nav__header">
							
						<center> <img class="site-logo site-logo--side-nav" src=" {{ asset('img/rw-white.svg') }} " alt="Website Logo Image Alternative"> </center>

						{{-- <img data-pushbar-close class="icon icon-x" src=" {{ asset('img/icons/x.svg') }} " alt="x-icon"> --}}
						
						</div>
					</center>
			
				
					@yield('side-navigation')


			</div>









			{{-- Menu Para Mobile --}}
		    <div data-pushbar-id="side-nav--header" class="pushbar from_left side-nav">
		    		
					<center> 
						<div class="side-nav__header">
							
						<center> <img class="site-logo site-logo--side-nav" src=" {{ asset('img/rw-white.svg') }} " alt="Website Logo Image Alternative"> </center>

						{{-- <img data-pushbar-close class="icon icon-x" src=" {{ asset('img/icons/x.svg') }} " alt="x-icon"> --}}
						
						</div>
					</center>
			
				
				<ul class="menu-header menu-header--side-nav">
					
					
					<li class="menu__link 
						@if (Request::is('texto') or Request::is('texto/*'))
							is-active
						@else
							is-inactive
						@endif
					"> <a href="{{ route('texto') }}"> Textos </a> </li>



					<li class="menu__link 
						@if (Request::is('fotografia') or Request::is('fotografia/*'))
							is-active
						@else
							is-inactive
						@endif
					"> <a href="{{ route('fotografia') }}"> Fotografia </a> </li>
					

					

{{-- 
					<li class="menu__link {{ Request::is('fotografia') ? 'is-active' : 'is-inactive' }}"> <a href="{{ route('fotografia') }}"> Destacados </a> </li>
					<a class="menu__link menu__button" href="{{ route('quem-sou-eu') }}"> <li class=" {{ Request::is('quem-sou-eu') ? 'is-active' : 'is-inactive' }}"> Quem Sou Eu </li> </a>  --}}
				</ul>


			</div>