





<div  class="footer-mobile footer__wrapper container flex">
  	<div class="align-center">
		
		<center> 
			<a href="{{ route('landing-page') }}"> 
				<img class="site-logo site-logo--footer" src=" {{ asset('img/rw-white.svg') }} "> 
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



<div class="container footer-desktop footer__wrapper footer__wrapper--desktop">

		<div class="footer__logo">
			<img class="site-logo site-logo--footer" src="{{ asset('img/logo-white.svg') }}" alt="">
		</div>
	
	<div class="flex">
	
		<div class="footer__left-block">

			<div class="footer__word">
				<p>Este site foi à mão pelo Rtandrew. 😎</p>
				<p> ©2015 - {{ date('Y') }}. Todos os Direitos Reservados.</p>
				<p class="footer__word--dmca"> For copyright infrigment, please use the <a href=""> DMCA </a>.  </p>
			</div>
		</div>


		<div class="footer__right-block">
			
			<div class="footer__social-midia flex flex--wrap">
				
				<div class="social-midia__block">
					
					<img class="social-midia__icon" src="{{ asset('img/icons/social-midia/instagram.svg') }}" alt="Instagram Icon">	
					<h2 class="social-midia__nome"> Instagram </h1>
					<a class="social-midia__link" href="https://www.instagram.com/alkhemy.zavua/">Al-Khemy, The Zavua</a>
				</div>
				
				<div class="social-midia__block">
					
					<img class="social-midia__icon" src="{{ asset('img/icons/social-midia/pinterest.svg') }}" alt="Pinterest Icon">	
					<h2 class="social-midia__nome"> Pinterest </h1>
					<a class="social-midia__link" href="https://www.pinterest.com/anderson_rodax/">Anderson Rodax</a>
				</div>
				
				<div class="social-midia__block">
					
					<img class="social-midia__icon" src="{{ asset('img/icons/social-midia/strava.svg') }}" alt="Strava Icon">	
					<h2 class="social-midia__nome"> Strava </h1>
					<a class="social-midia__link" href="https://www.strava.com/athletes/13278283">RTAndrew Marcus</a>
				</div>
				
				<div class="social-midia__block">
					
					<img class="social-midia__icon" src="{{ asset('img/icons/social-midia/dribbble.svg') }}" alt="Dribbble Icon">	
					<h2 class="social-midia__nome"> Dribbble </h1>
					<a class="social-midia__link" href="https://dribbble.com/Rtandrew">Rtandrew</a>
				</div>
				
			</div>	
			
		</div>
	</div>
</div>
