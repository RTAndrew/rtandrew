<!DOCTYPE html>
<html  lang="pt" dir="ltr">
<head>



		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122144612-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-122144612-1');
		</script>


		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-W8H6PF8');</script>
		<!-- End Google Tag Manager -->

		<!-- Hotjar Tracking Code for www.rtandrew.com -->
		<script>
		    (function(h,o,t,j,a,r){
		        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
		        h._hjSettings={hjid:943755,hjsv:6};
		        a=o.getElementsByTagName('head')[0];
		        r=o.createElement('script');r.async=1;
		        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
		        a.appendChild(r);
		    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
		</script>







		<!-- Structered Markup -->
			
			<!-- Site Identification -->
				<script type="application/ld+json">
					{ 
					  "@context": "http://schema.org", 
					  "@type": "WebSite", 
					  "url": "{{ url('/') }}", 
					  "name": "Rtandrew Paul",
					  "inLanguage": "pt",
					  "additionalType": ["CreativeWork", "Person", "Organization"],
					  "author": {
						    "@type": "Person",
						    "name": "Rtandrew Paul"
					  },
					  "description": "Rtandrew Paul is an alias used by Anderson K. Lando as a signature for his creative works.",
					  "disambiguatingDescription": "Personal website of Anderson K. Lando",
					  "publisher": "Anderson K. Lando",
					  "keywords":[
							"Poesias",
							"Prosa",
							"Poemas de Escritores Angolanos",
							"Textos",
							"Poemas",
							"Contos",
							"Information",
							"Blog",
							"BTT em Angola",
							"BTT",
							"Mountain Bike",
							"Fotos de Luanda",
							"Aventuras de BTT"
					  	], 
					  "hasPart": [
							{
								"@context": "http://schema.org/",
								"@type": "WPHeader",
								"@id": "#header",
								"headline": "headline-string",
								"cssSelector": "#header"
								
							},
							{
								"@context": "http://schema.org/",
								"@type": "WPSidebar",
								"cssSelector": ".sidebar"
							},
							{
								"@context": "http://schema.org/",
								"@type": "WPFooter",
								"cssSelector": ".footer",
								"@id": "#footer",
								"copyrightHolder":"Rtandrew Paul",
								"publisher": "Rtandrew Paul",
								"copyrightYear":"{{ date('Y') }}"
							}
						]
					}
				</script>		

			<!-- Organization Identification -->
				<script type="application/ld+json">
					{
					  "@context" : "http://schema.org",
					  "@type": "Organization",
					  "name": "Rtandrew Paul",
					  "url" : "{{ url('/') }}",
					  "logo": {
					    "@type": "ImageObject",
					    "url": "{{ asset('img/logo-black.svg') }}"
					  },
					  "founders": {
					    "@type": "Person",
					    "name": "Anderson K. Lando"
					  },
					  "sameAs" : [
					            "https://www.instagram.com/alkhemy.zavua/",
					            "https://www.pinterest.com/anderson_rodax/",
					            "https://www.strava.com/athletes/13278283",
					            "https://dribbble.com/Rtandrew",
					            "https://github.com/RTAndrew"
					  ],
					   "address": {
					    "@type": "PostalAddress",
					    "addressLocality": "Luanda",
					    "addressCountry": "AO"
					  }
					}
				</script>



			<!-- Person Identification -->
			<script type="application/ld+json">
				{
				  "@context": "http://schema.org",
				  "@type": "Person",
				  "name": "Rtandrew Paul",
				  "sameAs" : [
				            "https://www.instagram.com/alkhemy.zavua/",
				            "https://www.pinterest.com/anderson_rodax/",
				            "https://www.strava.com/athletes/13278283",
				            "https://dribbble.com/Rtandrew",
				            "https://github.com/RTAndrew"
				  ],
				  "address": {
				    "@type": "PostalAddress",
				    "addressLocality": "Luanda",
				    "addressCountry": "AO"
				  }
				}
			</script>

			





			@yield('json-ld')
			


































    <title> @yield('titulo-pagina') {{ config('app.name', 'Rtandrew Paul') }} @yield('titulo-pagina-after') </title>





    <meta charset="text/html; utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="poesias, prosas, poemas, pensamentos, rtandrew paul, textos de rtandrew, textos angolanos, frases de escritores angolanos, poetas angolanos, poetas amadores em angola, escritores angolanos, escritores amadores em angola, artistas angolanos, contos de poetas angolanos, poesia suja, poemas sujos, poemas angolanos, poesia angolana, poesia de angola, fotos, fotar, fotos de luanda, fotos da cidade de luanda, fotos de angola, fotografias de angola, fotografos de angola, fotografos amadores em angola, btt angola, aventuras de btt, experiencias de btt, exposição virtual, exposição de fotografia angola">

    <meta property="og:locale" content="pt_PT" />

			<meta property="og:site_name" content="{{ config('app.name', 'Rtandrew Paul') }}" />
			<meta property="og:see_also" content="https://www.instagram.com/alkhemy.zavua/" />
			<meta property="og:see_also" content="https://dribbble.com/Rtandrew" />
			<meta property="og:see_also" content="https://www.pinterest.com/anderson_rodax/" />
			<meta property="og:see_also" content="https://www.strava.com/athletes/13278283" />



    @yield('metatags')



	    <link rel="stylesheet" type="text/css" href=" {{ asset('css/app.css') }} ">
	    <link href="{{ asset('vendor/cssanimation.min.css') }}" rel="stylesheet">
	    {{-- <link href="{{ asset('vendor/pushbar/pushbar.css') }}" rel="stylesheet"> --}}
	    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"> --}}

	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>

	    {{-- JUSTIFIED GRID --}}
		<link href="{{ asset('vendor/justified-gallery/justifiedGallery.min.css') }}" rel="stylesheet">

    @yield('stylesheet')
    
</head>
<body> 
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W8H6PF8"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->




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
	<footer id="footer" class="footer">
		
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

{{-- Broken Image --}}
	<script>
		$('img').on("error", function() {
			$(this).attr('src', '{{ asset('img/image-not-found.png') }}');
		});	
	</script>

{{-- JS for the Mobile Header --}}
<script>
	var nav = document.getElementById("topNav");
	var main = document.getElementById("main");
	var menu = document.getElementsByClassName("menuitems");
	var close = document.getElementById("closebtn");
	var menulist = document.getElementById("menulist");
	var anim = document.getElementsByClassName("animate-header");

	var navDefaultSize = "30px";
	var navExtendedSize = "170px";
//default to measure if/else from
nav.style.height = navDefaultSize;

// for (i = 0; i < menu.length; i++){menu[i].style.marginTop="100px";};

close.addEventListener("click", function(){
  var menuIcon = close.children;
  for (i = 0; i < menuIcon.length; i++){
  menuIcon[i].classList.toggle("active");
  }   
});

function navToggle() {
	
	//to close
	if (nav.style.height <= navExtendedSize) {
			menulist.classList.add("is-inactive");
			nav.style.height = "30px";
			for (i = 0; i < anim.length; i++){anim[i].classList.remove("anim");};
			
			var i = 0;
			for (i = 0; i < menu.length; i++){
				menu[i].style.opacity="0.0";
				// menu[i].style.marginTop="100px";
			};
		
	} 
	
	//to open
	else if (nav.style.height <= "30px") {
		menulist.classList.remove("is-inactive");
		for (i = 0; i < anim.length; i++){anim[i].classList.add("anim");};
		nav.style.height = navExtendedSize;
		// main.style.marginTop = "275px";
		var i = 0;
		for (i = 0; i < menu.length; i++){
			menu[i].style.opacity="1.0";
			// menu[i].style.marginTop="0px";
		};
		
	}

};

</script>





	<!-- RECEBER OS SCRIPTS NECESSARIOS DE CADA PAGINA -->

	<script>
		@yield('script')
	</script>




     

</body>
</html>