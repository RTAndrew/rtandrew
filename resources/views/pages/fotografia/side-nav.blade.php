			<div class="side-nav__section">
				{{-- <h3 class="side-nav__titulo"> Álbuns </h3> --}}
				
				

					<a class="texto-categoria" href="">


						<span class="texto-categoria__midia" > 
							<img class="" src=" {{ asset('img/icons/star.svg') }} " alt="collection-midia--white">
						</span>
					

						<span class="side-nav__link"> Destacados </span>
						
					</a>



					{{-- <a class="texto-categoria" href=" ">


						<span class="texto-categoria__midia" > 
							<img class="" src=" {{ asset('img/icons/exposition.svg') }} " alt="collection-midia--white">
						</span>
					

						<span class="side-nav__link"> Exposição </span>
						
					</a> --}}
				
				
			</div>	




			<div class="side-nav__section">

						<h3 class="side-nav__titulo"> Álbuns </h3>
						
						@foreach ($albuns as $album)
							<a class="texto-categoria" href=" {{ route('album', $album->slug)}} ">
			
								<span class="texto-categoria__midia" > 
									<img class="" src=" {{ asset('img/icons/image.svg') }} " alt="collection-midia--white">
								</span>

								<span class="side-nav__link"> {{ $album->titulo }} </span>
								
							</a>
						@endforeach
						
												
			</div>