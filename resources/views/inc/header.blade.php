<div class="container">
			
    <ul class="menu-header">
			<li class="menu__logo"> <a href="{{ route('landing-page') }}"> <img class="site-logo" src=" {{ asset('img/logo-white.svg') }} "> </a> </li>
			{{-- <li class="menu__link {{ Request::is('texto' or 'texto/*') ? 'is-active' : 'is-inactive' }}"> <a href="{{ route('texto') }}"> Textos </a> </li> --}}
			
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
			

			


			<li class="menu__link {{ Request::is('fotografia') ? 'is-active' : 'is-inactive' }}"> <a href="{{ route('fotografia') }}"> Destacados </a> </li>
			<a class="menu__link menu__button" href="{{ route('quem-sou-eu') }}"> <li class=" {{ Request::is('quem-sou-eu') ? 'is-active' : 'is-inactive' }}"> Quem Sou Eu </li> </a> 
	</ul>
</div>
