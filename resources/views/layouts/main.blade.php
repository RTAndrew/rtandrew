<!DOCTYPE html>
<html  lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> @yield('titulo-pagina') {{ config('app.name', 'Rtandrew') }} </title>
	
    @yield('stylesheet')
    
	    <link rel="stylesheet" type="text/css" href=" {{ asset('css/app.css') }} ">
	    <link href="{{ asset('vendor/cssanimation.min.css') }}" rel="stylesheet">
	    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> --}}

	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>
<body> 


	<header> 
		<div class="container">
			
		    <ul class="menu">
					<li class="menu__logo"> <a href=""> <img src=" {{ asset('img/logo-white.svg') }} "> </a> </li>
					<li class="menu__link is-active"> <a href=""> Textos </a> </li>
					<li class="menu__link is-inactive"> <a href=""> Fotos </a> </li>
					{{-- <li class="is-inactive"> <a href=""> Sobre </a> </li> --}}
			</ul>
		</div>

	</header>







	<div id="main" class="main">
		
		{{-- RECEBER O MAIN --}}
			@yield('main')
	</div>


	












	<footer>
		
		{{-- RECEBER O FOOTER --}}
			@yield('footer')
	</footer>
	
















<!-- SCROLL REVEAL -->
    <script src="{{ asset('vendor/wowjs/wow.min.js') }}"></script>
		
	<script>
          new WOW().init();
      </script>
















	<!-- RECEBER OS SCRIPTS NECESSARIOS DE CADA PAGINA -->
      <script>

        @yield('script')
        
       // starting position on window's scroll position
		var position = $(window).scrollTop();

		// each letter
		var i = $(".latin-date");
		var e = $(".latin-word");

		// the top position of each letter
		var iTop = i.css('top').replace('px','');
		var eTop = e.css('top').replace('px','');
		var iTopOriginal = i.css('top').replace('px','');
		var eTopOriginal = e.css('top').replace('px','');


		$(window).on('scroll', function() {
		  
		  var scroll = $(window).scrollTop();
		  
		  // 100 is an arbitrary number. Replace
		  // it with the position from the top you
		  // want the animation to begin.
		  if (scroll >= 0) {
		   	if (scroll > position) {
		      // animate letters up
		      animateUp();
		    }
		    else {
		      // animate letters going down
		      animateDown();
		    }

		     position = scroll;  // update position
		   }
		  
		});


		function animateUp() {  
		  // If the letters top position is greater
		  // than 0, reduce it until its 0
		  if (iTop > 0) {
		    i.css('top', iTop - 2);
		    iTop--;
		  } else {
		    iTop = 0;
		  }
		  if (eTop >= 0) {
		    e.css('top', eTop + 4);
	    	eTop++;
	    		// Stop the letter passing
		    	if (eTop > 181){
		    		eTop = 180;
		    	}

		  } else {
		    eTop = 0;
		  }
		}


		function animateDown() {  
		  // if the top of the letters
		  // are greater than -1 and are 
		  // under the original top position,
		  // add 1px to the top position of
		  // the letter
		  if (iTop >= 0 && iTop < iTopOriginal) {
		    i.css('top', iTop + 2);
		    iTop++;
		  }

		  if (eTop >= 1 && eTop > eTopOriginal) {
		    e.css('top', eTop - 1);
		    eTop--;
		  }
		}
      </script>

</body>
</html>