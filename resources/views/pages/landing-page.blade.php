@extends('layouts.main')



@section('titulo-pagina-after')
 - Textos, Contos, Fotografias, Aventuras e Experiências
@endsection


@section('metatags')

	<meta name="description" content="Um acervo com as obras do Rtandrew Paul, desde textos, notas, contos, até fotografias, aventuras e experiências vividas ao pressionar o click para fotar.">

	<!--FACEBOOK-->
	    <meta property="og:image" content="{{ asset('img/opengraph-image.png') }}">
	    <meta property="og:image:type" content="image/png">
	    <meta property="og:type" content="website" />
	    <meta property="og:url" content="{{ route('landing-page') }}"/>
	    <meta property="og:title" content="{{ config('app.name', 'Rtandrew Paul') }}" />
		<meta property="og:description" content="Desfrute de um acervo de textos criados em diferentes intensidades, e aprecie também aventuras e experiências vividas através da fotografia." />

	<!-- TWITTER -->
		<meta name="twitter:card" content="summary" />
		{{-- <meta name="twitter:site" content="@PoetryFound" /> --}}
		<meta name="twitter:title" content="{{ config('app.name', 'Rtandrew Paul') }}" />
		<meta name="twitter:description" content="Desfrute de um acervo de textos criados em diferentes intensidades, e aprecie também aventuras e experiências vividas através da fotografia." />
		<meta name="twitter:image" content="{{ asset('img/opengraph-image.png') }}" />


@endsection






@section('stylesheet')

	<link rel="stylesheet" type="text/css" href=" {{ asset('css/landing.css') }} ">

@endsection

@section('main')

<div class="landing-page">
	<div class="bg">
		<section class="container">
					
			<div class="latin latin--left">
				<span id="e" class="latin-word wow fadeInUp" data-wow-duration="1.1s" data-wow-delay="1.6s"> Nosce et Ipsum </span>	
				<span id="i" class="latin-date wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.1s"> XVIII </span>
			</div>




			<div class="banner container">

				<div class="above-the-fold">

					<h1 class="wow animated fadeIn" data-wow-duration="4.8s" data-wow-delay="2.4s">
						Porque palavras constrõem pontes em lugares inexplorados, e a criatividade é um meio crucial para a sobrevivência.
					</h1>

					{{-- <center> <a href="" class="button primary wow animated fadeInUp" data-wow-duration="1.8s" data-wow-delay="2.5s"> Quem Sou Eu </a> <center> --}}
				</div>
			</div>

		</section>
	</div>

	






	<section class="coisas-existentes">
		<div class="container">
					
			<div class="latin latin--right">
				<span id="e" class="latin-word wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="1.6s"> Ex Amino </span>	
				<span id="i" class="latin-date wow fadeInUp" data-wow-duration="1.4s" data-wow-delay="2.2s"> XVIII </span>
			</div>
		</div>


			<section class="coisas-existentes__wrapper">
				
				<div class="container">
					<h1 class="titulo-head titulo-head--vertical">
						Conteúdo 
					</h1>
				</div>

				<div class="coisas-existentes__blocks container flex">

					<div class="block">
						<p class="block__bold">01</p>
						<h3 class="block__titulo wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">Textos, Notas e Projectos</h3>
						<p class="block__descricao wow fadeInUp" data-wow-duration="1.4s" data-wow-delay="1.3s">Todos os textos, novos ou actualizados, serão enviados sempre que concluídos. Para além disso, será aqui onde irei publicar pela primeira vez os meus contos.</p>
					</div>

					<div class="block">
						<p class="block__bold">02</p>
						<h3 class="block__titulo wow fadeIn" data-wow-duration="2s" data-wow-delay="0.8s">Fotos e Experiências </h3>
						<p class="block__descricao wow fadeInUp" data-wow-duration="1.4s" data-wow-delay="1.6s"> O grande prazer de <i>fotar</i> é experiência única que reside no processo inteiro. Desde as experiências e aventuras de BTT até aquilo que vivi ou senti ao pressionar o botão de <i>fotar</i>.    </p>
					</div>

					<div class="block">
						<p class="block__bold">03</p>
						<h3 class="block__titulo wow fadeIn" data-wow-duration="2s" data-wow-delay="1.2s"> Entrevista & Exposição Virtual </h3>
						<p class="block__descricao wow fadeInUp" data-wow-duration="1.4s" data-wow-delay="1.9s">Em uma entrevista, cheia de gargalos e pensamentos profundos, esforço-me para descrever quem realmente é o Rtandrew. E por fim, uma exposição, intitulada <i>Ex Umbra In Solem</i>, com trabalhos que de alguma forma me embarcam para uma reminiscência divina. </p>
						<span class="coming-soon wow fadeInUp" data-wow-duration="1.4s" data-wow-delay="2s"> Brevemente... </span>
					</div>
				</div>

			</section>

		

	</section>

	<section class="photocollage">
		<div class="photocollage__wrapper">
			<h1 class="titulo-head titulo-head--vertical">
				Pick Your Poison
			</h1>

			<center> 
				<a class="button secondary latin-word wow fadeInLeft" data-wow-duration="1.4s" data-wow-delay="0.3s" href="{{ route('texto') }}"> Textos </a>

				<a class="button button--cta wow fadeInRight" data-wow-duration="1.4s" data-wow-delay="0.3s" href="{{ route('fotografia') }}"> Fotografia </a>
			</center>
		</div>
	</section>





</div>

@endsection



@section('script')

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
		    i.css('top', iTop + 9);
		    iTop++;
		  }

		  if (eTop >= 1 && eTop > eTopOriginal) {
		    e.css('top', eTop - 2);
		    eTop--;
		  }
		}

@endsection