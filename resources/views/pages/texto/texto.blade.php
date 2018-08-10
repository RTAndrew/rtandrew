@extends('layouts.main')




@section('main')



<div class="text-page">
	


	<div class="texto">
		
		<div class="texto__hero">
			
				<h1 class="texto__titulo wow animated fadeIn" data-wow-duration="1.7s" data-wow-delay="0.3s"> 
					Fake Love Like The Fire that Doesn't Burn 
				</h1>
			
			
				<div class=" wow fadeIn"  data-wow-duration="1.4s" data-wow-delay="0.6s">

				
				@component('components.nav-categoria--simple')
				
				{{-- Lado Esquerdo --}}					
					@slot('categoria')
						...Quem ela era.. quem ela foi...
					@endslot
					
					@slot('icon')
						<svg class="icon" width="25" height="22" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<ellipse cx="12.0926" cy="11" rx="12.0926" ry="11" fill="#20E3B2"/>
						</svg>

					@endslot


						
					{{-- Lado Direito --}}
						@slot('categoria2')
							XVII
						@endslot
						
						@slot('icon2')
							<svg class="icon" width="92" height="58" viewBox="0 0 92 58" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M0 29C7.45946 12.3404 25.4865 0 46 0C67.1351 0 85.1622 11.7234 92 29C84.5405 45.6596 66.5135 58 46 58C24.8649 58 6.83784 46.2766 0 29ZM46 8.6383C57.1892 8.6383 66.5135 17.8936 66.5135 29C66.5135 40.1064 57.1892 49.3617 46 49.3617C34.8108 49.3617 25.4865 40.1064 25.4865 29C25.4865 17.8936 34.8108 8.6383 46 8.6383Z" fill="#20E3B2"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M11.8108 0C18.6486 0 23.6216 5.55319 23.6216 11.7234C23.6216 18.5106 18.027 23.4468 11.8108 23.4468C4.97297 23.4468 0 17.8936 0 11.7234C0 4.93617 5.59459 0 11.8108 0Z" transform="translate(34.1892 16.6596)" fill="#20E3B2"/>
							</svg>
						@endslot


					@endcomponent
				</div>
			
		
			
		</div>

		<div class="texto__content">
			
			

			<div class="container wow slideInUp"  data-wow-duration="1.3s" data-wow-delay="0s">

					
				<div class="texto__descricao wow fadeIn"  data-wow-duration="0.50s" data-wow-delay="1.14s">
					
					{{-- <h2 class="texto__titulo--small"> Valeria </h2> --}}
					<p >
						
Ela é vida loka, de cabelos pretos e madeixa castanha <br>
É roleira, seguindo uma vida de blogueira <br>
Batom preto, sai justa preta. Uniforme a pambaleira.  <br>
Posta fotos do seu corpo vegetariano <br>
Piercings no corpo para dizer que é do signo canceriano  <br>
Sua vida é um livro aberto, capítulos de loucuras sem fecho <br>
Tatuagens que acentuam as paisagens do seu relevo <br>
All of it was like a prayer. As I closed my eyes trusting my lovely in front of me, I was letting go my self as much as I could to <br>
Ela é do team M.O.B <br>
Money Over Boyz <br>
Apesar de todo o look de "Bad Gal" e por fora ser uma autêntica beldade, <br>
ninguém sabe que por dentro ela é completamente um fenómeno natural... <br>
Cheia tempestade e caos. <br>
Que também precisa, de tempo em tempo, <br>
amor para acalmar o seu temperamento...  <br>
					</p>

					<p> Valeria </p>

				</div>


			</div>


			<div class="container">

				<h2 class="texto__relacionados"> Textos relacionados </h2>
				{{-- APRESENTAR A GRID --}}
				{{-- DOS CARDS RELACIONADOS --}}
				<div class="grid-card">
					
					{{-- CARDS RELACIONADOS--}}



						@php
			              $i = 0;
			            @endphp

			          	@for ($j = 0; $j < 4; $j++)
						    {{-- WRAPPER --}}
							<a href=" {{ route('texto.texto') }} " class="grid-card__card grid-card--texto-small  wow animated slideInUp" data-wow-duration="0.8s" data-wow-delay="{{$i}}s">
								<div class="wrapper">
									
									<div class="grid-card__frame-top flex">
										
										<div class="align-left">
											<span class="texto-categoria__cor" style="background: #bdc3c7;  /* fallback for old browsers */
												background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
												background: linear-gradient(to right, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
												"> 
											</span>
										</div>

										<div class="view-count align-right">
											Rodax
										</div>

									</div>


									<h1 class="grid-card__titulo"> For Whom the Bell TollsWhom the Bell TollsWhom the Bell TollsWhom the Bell Tolls </h1>

							 	</div>
							</a>


			            <!-- Incrementar a variavel -->
			            @php
			              $i+=0.08;
			            @endphp

						@endfor
			            



						
						

						

						
						
					

				</div>
			</div>

		</div>


	</div>







</div>















@endsection