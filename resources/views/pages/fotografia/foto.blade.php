@extends('layouts.main')




@section('main')

{{-- MAIN CONTENT  --}}
	{{-- PUSH BAR --}}
	<div class="pushbar_main_content">
		

		@section('side-navigation')

			@include('pages.fotografia.side-nav')


		@endsection
	

	</div>



<div class="foto-page">
	


	<div class="foto">
		<div class="container">
				@component('components.nav-categoria--full')
				
				{{-- Lado Esquerdo --}}					
					@slot('categoria')
						 Menu
					@endslot
					
					@slot('icon')
						<svg class="icon icon-align" width="26" height="26" viewBox="0 0 26 19" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="26" height="3" fill="white"/>
							<rect width="13" height="3" transform="translate(0 8)" fill="white"/>
							<rect width="26" height="3" transform="translate(0 16)" fill="white"/>
						</svg>
					@endslot



				{{-- Lado Direito --}}
					@slot('categoria2')
						
					@endslot
					
					@slot('icon2')
						
					@endslot


				@endcomponent
			</div>
		<div class="foto__hero">
			<center> <img src=" {{ asset('img/foto/IMAG0010.jpg') }} "></center>
		</div>

		<div class="foto__content">
			<div class="container">

				
				<div class="foto__album">
					<span> Presente no álbum: </span>

					<a class="foto__album-link" href="">  Jornadas de BTT no KKasasdsdasddasdsadasdasdas500 </a>

				</div>
				

				<h1 class="foto__titulo">
					O Sorriso de uma criança é o maior feitiço contra os maus olhares
				</h1>
				

				<div class="foto__descricao">
					
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium tempore commodi provident blanditiis suscipit, laboriosam consectetur quae necessitatibus sed saepe, aut. Vero voluptate, ad voluptatum pariatur explicabo nulla, voluptates corrupti.
					</p>
					
					
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium tempore commodi provident blanditiis suscipit, laboriosam consectetur quae necessitatibus sed saepe, aut. Vero voluptate, ad voluptatum pariatur explicabo nulla, voluptates corrupti. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum praesentium dicta quam maxime, veniam ipsam quo laborum eveniet dolor libero placeat eum tenetur ea necessitatibus eius, mollitia ut esse laboriosam.
					</p>
					
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium tempore commodi provident blanditiis suscipit, laboriosam consectetur quae necessitatibus sed saepe, aut. Vero voluptate, ad voluptatum pariatur explicabo nulla, voluptates corrupti.
					</p>

				</div>


			</div>

		</div>


	</div>







</div>















@endsection