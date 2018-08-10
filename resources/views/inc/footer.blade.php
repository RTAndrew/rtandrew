{{-- <div class="footer__wrapper">	 
	<div class="container">
		
		<img class="footer__logo" src=" {{ asset('img/rw-white.svg') }} ">
		
		<div>
			
		<p class="footer__word"> Este site foi criado à imagem de Rtandrew. </p>
		<p class="footer__word"> For copyright infrigment, please use the DMCA. </p>
		</div>

	</div>
</div>

 --}}


<div  class="footer__wrapper container flex">
  	<div class="align-center">
		
		<center> 
			<a href="{{ route('landing-page') }}"> 
				<img class="footer__logo site-logo site-logo--footer" src=" {{ asset('img/rw-white.svg') }} "> 
			</a>
		</center>
  		
  		<div class="footer__social-icons">
			<center> 

				<a href="">
		  			<img src=" {{ asset('img/icons/social-midia/instagram.svg') }} " alt="Instagram">	
				</a>
				
				<a href="">
		  			<img src=" {{ asset('/img/icons/social-midia/github.svg') }} " alt="Github">	
				</a>
				
				<a href="">
		  			<img src=" {{ asset('/img/icons/social-midia/pinterest.svg') }} " alt="Pinterest">	
				</a>

				<a href="">
		  			<img src=" {{ asset('/img/icons/social-midia/strava.svg') }} " alt="Strava">	
				</a>
			</center>

  		</div>

		<p class="footer__word"> Este site foi criado à imagem do Rtandrew. </p>
		<p class="footer__word"> For copyright infrigment, please use the <a href="footer__word--link"> DMCA </a>.  </p>

	</div>
</div>

