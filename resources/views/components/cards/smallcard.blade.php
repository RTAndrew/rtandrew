<div class="grid-card">
					
					{{-- CARDS RELACIONADOS--}}

						@php
			              $i = 0;
			            @endphp
						
						@foreach( $textos as $textoRelacionado)

						    {{-- WRAPPER --}}
							<a href=" {{ route('textos.texto', $textoRelacionado->slug)}}" class="grid-card__card grid-card--texto-small  wow animated slideInUp" data-wow-duration="0.8s" data-wow-delay="{{$i}}s">
								<div class="wrapper">
									
									<div class="grid-card__frame-top flex">
										
										<div class="align-left">

											@if( $textoRelacionado->background_color != null)
												<span class="texto-categoria__cor" style="{{ $textoRelacionado->background_color }}"> 
												</span>

											@else 
												@foreach ($textoRelacionado->notas as $textoNota)
													
													<span class="texto-categoria__cor" style="{{ $textoNota->background_color }}"> 
													</span>

												@endforeach
											@endif

										</div>

										<div class="view-count align-right">
											{{ romanNumerals($textoRelacionado->view_count) }}
										</div>

									</div>


									<h1 class="grid-card__titulo"> 
										{{ $textoRelacionado->titulo }}
									</h1>

							 	</div>
							</a>


			            <!-- Incrementar a variavel -->
			            @php
			              $i+=0.08;
			            @endphp

						@endforeach