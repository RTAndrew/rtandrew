@extends('layouts.main')

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
						<h3 class="block__titulo wow fadeIn" data-wow-duration="2s" data-wow-delay="1.2s">Textos, Notas e Projectos</h3>
						<p class="block__descricao wow fadeInUp" data-wow-duration="1.4s" data-wow-delay="2.3s">Todos os textos, novos ou actualizados, serão enviados sempre que concluídos.</p>
					</div>

					<div class="block">
						<p class="block__bold">02</p>
						<h3 class="block__titulo wow fadeIn" data-wow-duration="2s" data-wow-delay="1.6s">Fotos e Experiências </h3>
						<p class="block__descricao wow fadeInUp" data-wow-duration="1.4s" data-wow-delay="2.6s"> O grande prazer de <i>fotar</i> é experiência única que reside no processo inteiro. Desde as aventuras de BTT até aos planos antes de fotografar.   </p>
					</div>

					<div class="block">
						<p class="block__bold">03</p>
						<h3 class="block__titulo wow fadeIn" data-wow-duration="2s" data-wow-delay="2s"> E um bocadinho sobre mim. lol </h3>
						<p class="block__descricao wow fadeInUp" data-wow-duration="1.4s" data-wow-delay="2.9s">Entre gargalos, erros, e tentativas frustradas, esforço-me para descrever quem realmente é o Rtandrew, sendo por isso uma das partes mais difíceis do projecto.  </p>
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
				<a class="button secondary latin-word wow fadeInLeft" data-wow-duration="1.4s" data-wow-delay="0.5s" href="{{ route('texto') }}"> Textos </a>

				<a class="button button--cta wow fadeInRight" data-wow-duration="1.4s" data-wow-delay="0.5s" href="{{ route('fotografia') }}"> Fotografia </a>
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