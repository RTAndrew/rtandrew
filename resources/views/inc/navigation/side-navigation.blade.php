{{-- ASIDE NAVIGATION --}}
			{{-- PUSHBAR JS --}}
		    <div data-pushbar-id="side-nav" class="pushbar from_left side-nav">
				<center> 
					<div class="side-nav__header">
						<center> 
							<img class="site-logo site-logo--side-nav" src=" {{ asset('img/rw-white.svg') }} " alt="Website Logo Image Alternative"> 
						</center>

						{{-- <img data-pushbar-close class="icon icon-x" src=" {{ asset('img/icons/x.svg') }} " alt="x-icon">			 --}}
					</div>
				</center>
		
				@yield('side-navigation')

			</div>



