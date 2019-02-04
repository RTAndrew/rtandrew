	{{-- APRESENTAR A GRID DOS CARDS --}}
				<div class="grid-card">
					
					{{-- CARDS --}}


						@php
			              $i = 0;
			            @endphp
						
						@foreach ($textos as $texto)
						    {{-- WRAPPER --}}
							<a href="{{ route('textos.texto', $texto->slug) }}" class="grid-card__card grid-card--texto wow animated slideInUp" data-wow-duration="1.3s" data-wow-delay="{{$i}}s">
								<div class="wrapper">
									
									<div class="grid-card__frame-top flex">
										
										<div class="align-left">
											
											@foreach ($texto->notas as $nota)
												
												<span class="texto-categoria__cor" style="{{ $nota->background_color }}"> 
												</span>

											@endforeach()

										</div>

										<div class="view-count align-right">
											{{ romanNumerals($texto->view_count) }}
										</div>

									</div>



									<h1 class="grid-card__titulo" style="font-size: {{determineFontSize($texto->titulo, $texto->descricao) }}px"> 

										{{ $texto->titulo }} 

									</h1>

									<div class="grid-card__mask">
										
										<div class="grid-card__descricao">
											{!! $texto->descricao !!}	
										</div>

									</div>

							 	</div>
							</a>


			            <!-- Incrementar a variavel -->
			            @php
			              $i+=0.05;
			            @endphp
							
						@endforeach()

			          

		
				</div>


{{ $textos->appends(request()->input())->onEachSide(5)->links() }}