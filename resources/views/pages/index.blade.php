@extends('layouts.main')


@section('main')


	<section class="grid-section">
		<div class="grid grid--esquerda container">
				
			<div class="grid__secondary">
				<span id="e" class="latin-word"> Nosce et Ipsum </span>	
				<span id="i" class="latin-date"> XVIII </span>
			</div>
			
			<div class="grid__primary wow animated fadeIn" data-wow-duration="3s" data-wow-delay="1.5s">
				   <h3> Rtandrew é um personagem substanciado por um alter-ego com o intuito de libertar e exprimir pensamentos livre de censuras. </h3>
			</div>

		</div>

	</section>

	<section class="grid-section">
		<div class="grid grid--texto container">
				
			<div class="grid__secondary">
				<span id="e" class="latin-word"> Ex Amino </span>	
				<span id="i" class="latin-date"> XVIII </span>
			</div>
			
			<div class="grid__primary">
				   <div class="nested-grid">
				   	
						<div class="grid__portrait">
							<img src=" {{ asset('img/texto/allicia.jpg') }} ">
						</div>
						
						<div class="grid__landscape">
							<img src=" {{ asset('img/texto/landscape.jpg') }} ">
						</div>
						
						<div class="grid__illustrator">
							<img src=" {{ asset('img/texto/illustrator.jpg') }} ">
						</div>
						
						<div class="grid__quote-creator">
							<img src=" {{ asset('img/texto/quote-creator.JPEG') }} ">
						</div>

				   </div>
			</div>

		</div>

	</section>

	<section class="grid-section">
		<div class="grid grid--esquerda grid--esquerda--full-width container">
				
			<div class="grid__secondary">
				<span id="e" class="latin-word"> Transit Umbra <br> Lux Permanet </span>	
				<span id="i" class="latin-date"> XVIII </span>
			</div>
			
			<div class="grid__primary">
				<div class="grid-foto">
					
					<div class="grid__legenda wow animated slideInUp" data-wow-duration="1.5s" data-wow-delay="0.5s">
						<h2> Rio Oficina (Kwanza) </h2>
						<p> Localizado a 21km da cidade do Kilamba, é um rio primordial para as diversas actividades e o sustento das famílias do Bairro Bita Tanque.</p>
					</div>

					<div class="grid__foto">

						<div class="grid__wrapper">
							<img src=" {{ asset('img/foto/landscape.jpg') }} " alt="Rio Oficina (Kwanza)">
						</div>

					</div>

				</div>

					
				<div class="grid__foto--twin">
					
						<img src=" {{ asset('img/foto/portrait.jpg') }} " alt="Skyscrapper">	
					
					
					
						<img src=" {{ asset('img/foto/heater.jpg') }} " alt="UMA - LEAKED">
					
				</div>

				<div class="grid-foto">

					<div class="grid__foto grid__foto--left">

						<div class="grid__wrapper">
							<img src=" {{ asset('img/foto/btt.jpg') }} " alt="Rio Oficina (Kwanza)">
						</div>

					</div>
					
					<div class="grid__legenda grid__legenda--left wow animated slideInUp">
						<h2> Campo dos P E R D I D O S </h2>
						<p> Onde a glória vive os seus dias <br> no Bita Progresso.</p>
					</div>

				</div>
				
			</div>

		</div>

		

	</section>

	<section></section>
@endsection