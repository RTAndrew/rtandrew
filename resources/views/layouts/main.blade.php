<!DOCTYPE html>
<html  lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> @yield('titulo-pagina') {{ config('app.name', 'Rtandrew') }} </title>
	
    @yield('stylesheet')
    
	    <link rel="stylesheet" type="text/css" href=" {{ asset('css/app.css') }} ">
	    <link href="{{ asset('vendor/cssanimation.min.css') }}" rel="stylesheet">
	    {{-- <link href="{{ asset('vendor/pushbar/pushbar.css') }}" rel="stylesheet"> --}}
	    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> --}}

	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>

	    {{-- JUSTIFIED GRID --}}
		<link href="{{ asset('vendor/justified-gallery/justifiedGallery.min.css') }}" rel="stylesheet">

</head>
<body> 
		




	{{-- HEADER --}}
	<header id="header" class="header"> 
		
		@include('inc.header')

	</header>


		

	

		{{-- MAIN CONTENT --}}
		<div id="main" class="main">
			
			@include('inc.navigation.side-navigation')

			{{-- RECEBER O MAIN --}}
				@yield('main')
		</div>


	




	{{-- FOOTER --}}
	<footer>
		
		{{-- RECEBER O FOOTER --}}
			@include('inc.footer')
	</footer>
	

	{{-- Justified Grid --}}

		<script src=" {{ asset('vendor/justified-gallery/jquery.justifiedGallery.min.js') }} "> </script>




{{-- PUSHBAR JS --}}
	<script src="{{ asset('vendor/pushbar/pushbar.js') }}"></script>
	
	<script type="text/javascript">
	  var pushbar = new Pushbar({
	        blur:false,
	        overlay:true,
	      });
	</script>




<!-- SCROLL REVEAL -->
    <script src="{{ asset('vendor/wowjs/wow.min.js') }}"></script>
		
	<script>
          new WOW().init();
    </script>










	<!-- RECEBER OS SCRIPTS NECESSARIOS DE CADA PAGINA -->

	<script>
		@yield('script')
	</script>




     

</body>
</html>