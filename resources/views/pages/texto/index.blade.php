@extends('layouts.main')




@section('main')

	{{-- MAIN CONTENT  --}}
	{{-- PUSH BAR --}}
	<div class="pushbar_main_content">
		


		@section('side-navigation')

			<div class="side-nav__section">
			{{-- <h3 class="side-nav__titulo"> Álbuns </h3> --}}
			
			
				<a class="texto-categoria" href=" {{ route('album') }} ">


					<span class="texto-categoria__midia" > 
						<img class="" src=" {{ asset('img/icons/exposition.svg') }} " alt="collection-midia--white">
					</span>
				

					<span class="side-nav__link"> Exposição </span>
					
				</a>
				
				
			</div>	

			<div class="side-nav__section">

						<h3 class="side-nav__titulo"> Notas </h3>


						<a class="texto-categoria" href="">

							<span class="texto-categoria__midia" > 
								<img class="" src=" {{ asset('img/icons/star.svg') }} " alt="collection-midia--white">
							</span>
						

							<span class="side-nav__link"> Destacados </span>
							
						</a>
						



						<a class="texto-categoria" href="">
	

							<span class="texto-categoria__cor"  style="background: #ee9ca7;  /* fallback for old browsers */
							background: -webkit-linear-gradient(to right, #ffdde1, #ee9ca7);  /* Chrome 10-25, Safari 5.1-6 */
							background: linear-gradient(to right, #ffdde1, #ee9ca7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */" > 
								
							</span>
						

							<span class="side-nav__link"> Quem Ela Era...Quem Ela Foi..asasdadsadsdadaaaaaaaaaa. </span>
							
						</a>
												
			</div>







			<div class="side-nav__section">
				<h3 class="side-nav__titulo"> Midia </h3>
				
				

					<a class="texto-categoria" href="">
		

						<span class="texto-categoria__midia" > 
							<img class="" src=" {{ asset('img/icons/image.svg') }} " alt="collection-midia--white">
						</span>
					

						<span class="side-nav__link"> Quem Ela Era...Quem Ela Foi..asasdadsadsdadaaaaaaaaaa. </span>
						
					</a>
				
				
			</div>	

		@endsection
	

































		{{-- TEXT_CONTAINER_PAGE --}}
		<div class="text-page">
	

			
			<div class="container">
				
				@include('inc.navigation.nav-categoria')			

			
			</div>

			
			<div class="container">
				

				
			


				{{-- APRESENTAR A GRID DOS CARDS --}}
				<div class="grid-card">
					
					{{-- CARDS --}}



						@php
			              $i = 0;
			            @endphp

			          	@for ($j = 0; $j < 9; $j++)
						    {{-- WRAPPER --}}
							<a href=" {{ route('texto.texto') }} " class="grid-card__card grid-card--texto wow animated slideInUp" data-wow-duration="1.3s" data-wow-delay="{{$i}}s">
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


									<h1 class="grid-card__titulo"> For Whom the Bell Tolls </h1>
									<p class="grid-card__descricao"> No man is an island,
										Entire of itself.
										Each is a piece of the continent,
										A part of the main.
										If a clod be washed away by the sea,
										Europe is the less.
										As well as if a promontory were.
										As well as if a manor of thine own
										Or of thine friend's were.
										Each man's death diminishes me,
										For I am involved in mankind.
										Therefore, send not to know
										For whom the bell tolls,
										It tolls for thee.
									</p>

							 	</div>
							</a>


			            <!-- Incrementar a variavel -->
			            @php
			              $i+=0.05;
			            @endphp

						@endfor
			            



						
						

						

						
						
					

				</div>



			</div>






		</div>

	</div>





@endsection