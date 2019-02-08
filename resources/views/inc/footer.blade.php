





<div  class="footer-mobile footer__wrapper container flex">
  	<div class="align-center">
		
		<center> 
			<a href="{{ route('landing-page') }}"> 
				<img class="site-logo site-logo--footer" src=" {{ asset('img/rw-white.svg') }} " alt="Logo Image"> 
			</a>
		</center>
  		
  		<div class="footer__social-icons">
			<center> 

				<a rel="me" href="https://www.instagram.com/alkhemy.zavua/">
		  			<img src=" {{ asset('img/icons/social-midia/instagram.svg') }} " alt="Instagram">	
				</a>
				
				<a rel="me" href="https://dribbble.com/Rtandrew">
		  			<img src=" {{ asset('/img/icons/social-midia/dribbble.svg') }} " alt="Dribbble">	
				</a>
				
				<a rel="me" href="https://www.pinterest.com/anderson_rodax/">
		  			<img src=" {{ asset('/img/icons/social-midia/pinterest.svg') }} " alt="Pinterest">	
				</a>

				<a rel="me" href="https://www.strava.com/athletes/13278283">
		  			<img src=" {{ asset('/img/icons/social-midia/strava.svg') }} " alt="Strava">	
				</a>
			</center>

  		</div>
		<p class="footer__word"> ©2015 - {{ date('Y') }} <br> Todos os Direitos Reservados.</p>
		
		<p class="footer__word">Este site foi à mão pelo Rtandrew. 😎</p>
		<p class="footer__word"> <a href="" title="DMCA"> DMCA </a>  </p>

	</div>
</div>



<div class="container footer-desktop footer__wrapper footer__wrapper--desktop">

		<div class="footer__logo">
			<img class="site-logo site-logo--footer" src="{{ asset('img/logo-white.svg') }}" alt="Logo Image">
		</div>
	
	<div class="flex">
	
		<div class="footer__left-block">

			<div class="footer__word">
				<p>Este site foi à mão pelo Rtandrew. 😎</p>
				<p> ©2015 - {{ date('Y') }}. Todos os Direitos Reservados.</p>
				<p class="footer__word--dmca"> For copyright infrigment, please use the <a href="" title="DMCA"> DMCA </a>.  </p>
			</div>
		</div>


		<div class="footer__right-block">
			
			<div class="footer__social-midia flex flex--wrap">
				
				<div class="social-midia__block">
					
					<img class="social-midia__icon" src="{{ asset('img/icons/social-midia/instagram.svg') }}" alt="Instagram Icon">	
					<h3	 class="social-midia__nome"> Instagram </h3>
					<a rel="me" class="social-midia__link" href="https://www.instagram.com/alkhemy.zavua/">Al-Khemy, The Zavua</a>
				</div>
				
				<div class="social-midia__block">
					
					<img class="social-midia__icon" src="{{ asset('img/icons/social-midia/pinterest.svg') }}" alt="Pinterest Icon">	
					<h3 class="social-midia__nome"> Pinterest </h3>
					<a rel="me" class="social-midia__link" href="https://www.pinterest.com/anderson_rodax/">Anderson Rodax</a>
				</div>
				
				<div class="social-midia__block">
					
					<img class="social-midia__icon" src="{{ asset('img/icons/social-midia/strava.svg') }}" alt="Strava Icon">	
					<h3 class="social-midia__nome"> Strava </h3>
					<a rel="me" class="social-midia__link" href="https://www.strava.com/athletes/13278283">RTAndrew Marcus</a>
				</div>
				
				<div class="social-midia__block">
					
					<img class="social-midia__icon" src="{{ asset('img/icons/social-midia/dribbble.svg') }}" alt="Dribbble Icon">	
					<h3 class="social-midia__nome"> Dribbble </h3>
					<a rel="me" class="social-midia__link" href="https://dribbble.com/Rtandrew">Rtandrew</a>
				</div>
				
			</div>	
			
		</div>
	</div>
</div>
