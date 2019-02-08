


<div class="container">

	<div id="topNav" class="header--mobile">

		<div class="navigation">
			<div class="menu__logo">
				<img class="site-logo" src="http://rtandrew.tk/img/logo-white.svg" alt="Logo Image">
			</div>

			<div id="closebtn" onclick="navToggle()">
				<span class="line1"></span>
				<span class="line2"></span>
				<span class="line3"></span>
			</div>
		</div>
		
			<ul id="menulist" class="menulist" >


				<li class="animate-header"> 
					<a class="menuitems
						@if (Request::is('texto') or Request::is('texto/*'))
						is-active
						@else
						is-inactive
						@endif " 
						href="{{ route('texto') }}"> Textos 
					</a> 
				</li>


				<li class="animate-header"> 
					<a class="menuitems
						@if (Request::is('fotografia') or Request::is('fotografia/*'))
						is-active
						@else
						is-inactive
						@endif " 
						href="{{ route('fotografia') }}"> Fotografia 
					</a> 
				</li>


				{{-- <li class="animate-header"> 
					<a class="menuitems
						@if (Request::is('quem-sou-eu') or Request::is('quem-sou-eu/*'))
						is-active
						@else
						is-inactive
						@endif " 
						href="{{ route('texto') }}"> Quem Sou Eu 
					</a> 
				</li> --}}
			

			</ul>	
				
	</div>
			
    <ul class="menu-header header--desktop">
			<li class="menu__logo"> <a href="{{ route('landing-page') }}"> <img class="site-logo" src="{{ asset('img/logo-white.svg') }}" alt="Logo Image"> </a> </li>
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
			

			


			{{-- <li class="menu__link {{ Request::is('fotografia') ? 'is-active' : 'is-inactive' }}"> <a href="{{ route('fotografia') }}"> Destacados </a> </li>
			<a class="menu__link menu__button" href="{{ route('quem-sou-eu') }}"> <li class=" {{ Request::is('quem-sou-eu') ? 'is-active' : 'is-inactive' }}"> Quem Sou Eu </li> </a>  --}}
	</ul>





	

</div>
