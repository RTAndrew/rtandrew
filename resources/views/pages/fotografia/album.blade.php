@extends('layouts.fotografia')





{{-- An ItemList to display rich snippets on google --}}
{{-- ImageGallery --}}
@section('json-ld')
	<script type="application/ld+json">
		{
			"@context" : "http://schema.org",
			"@type": "CollectionPage",
			
			"id": "{{ URL::current() }}",
			"url": "{{ URL::current() }}",
			
			"description":"Um album de fotografia intitulado {{ $album->titulo }}",
			    "mainEntityOfPage": {  
					"@type": "ImageGallery",
					"image": [
						@foreach ($fotos as $foto)
							@if ($loop->first)
								{
									"@type": "ImageObject",
									"name": "{{ $foto->titulo }}",
									"url": "{{ route('foto', $foto->slug)}}",
									"thumbnailUrl": "{{ cloudinaryImagePath($foto->image_url, '') }}"
								},
							@elseif ($loop->last)
								{
									"@type": "ImageObject",
									"name": "{{ $foto->titulo }}",
									"url": "{{ route('foto', $foto->slug)}}",
									"thumbnailUrl": "{{ cloudinaryImagePath($foto->image_url, '') }}"
								}
							@else
								{
									"@type": "ImageObject",
									"name": "{{ $foto->titulo }}",
									"url": "{{ route('foto', $foto->slug)}}",
									"thumbnailUrl": "{{ cloudinaryImagePath($foto->image_url, '') }}"
								},
							@endif
						@endforeach
					]
			 	} 
		}
	</script>
@endsection







@section('titulo-pagina')
 {{ $album->titulo }} - 
@endsection


@section('metatags')


	<!--FACEBOOK-->
	    <meta property="og:image" content="{{ cloudinaryImagePath($album->image_hero_url, '') }}">
	    
	    <meta property="og:type" content="website" />
	    
	    <meta property="og:title" content="{{ $album->titulo }}" />
		<meta property="og:description" content="Veja este album de fotos e muito mais outros criados pelo Rtandrew Paul" />
	    <meta property="og:url" content="{{ route('album', $album->slug) }}"/>


	<!-- TWITTER -->
		<meta name="twitter:card" content="summary" />
		{{-- <meta name="twitter:site" content="@PoetryFound" /> --}}
		<meta name="twitter:title" content="{{ $album->titulo }}" />
		<meta name="twitter:description" content="Veja este album de fotos e muito mais outros criados pelo Rtandrew Paul" />
		<meta name="twitter:image" content="{{ cloudinaryImagePath($album->image_url, '') }}" />


@endsection




@section('content')


	




	<div class="album">
			
		<div class="album__hero" style="background: linear-gradient(
		      rgba(0, 0, 0, 0.70),
		      rgba(0, 0, 0, 0.70)
		    ), url('{{ cloudinaryImagePath($album->image_hero_url, '10') }}') no-repeat center center fixed; 
		  -webkit-background-size: cover;">
		
			<div class="container">
				
				<h1 id="e" class="album__titulo e">
					{{ $album->titulo }}
				</h1>
				



				<p id="i" class="album__descricao e">
					
					{!! $album->descricao !!}

				</p>
				



				<div id="i" class="album__detalhe e">
					
					<span class="album__views">
						<img class="icon" src=" {{ asset('img/icons/eye.svg') }} " alt="eye icon">
						{{ $album->view_count }}
					
					</span>

					<span class="middot-spacer">
						&middot;
					</span>

					<span class="album__num-photo">
						<img class="icon" src=" {{ asset('img/icons/image--filled.svg') }} " alt="photo count icon">
						{{ $numberOfPhotos }}
					
					</span>

					
				</div>

				<div id="i" class="e">
					@component('components.social-media-share')
						@slot('link')
							{{ route('album', $album->slug) }}
						@endslot
						
						@slot('titulo')
							{{ $album->titulo }}
						@endslot
						
						@slot('descricao')
							{{ truncarMetaDescription($album->descricao) }}
						@endslot

						@slot('imagem')
							{{ cloudinaryImagePath($album->image_url, '') }}
						@endslot
					@endcomponent
				</div>

				<span class="i"></span>

			</div>

		</div>	

	</div>

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


	<div class="container">
		@include('inc.justified-grid')
	</div>


@endsection









@section('script')

		{{-- Change the Grid based on View Port Height --}}

		function myFunction(x) {
		    if (x.matches) { // If media query matches
		        $('#justified-grid').justifiedGallery({
					    rowHeight : 200,
					    lastRow : 'nojustify',
					    margins : 5,
					    captions : false
					});
		    } else {
		        $('#justified-grid').justifiedGallery({
					    rowHeight : 240,
					    lastRow : 'nojustify',
					    margins : 10,
					    captions : false
					});
		    }
		}

		var x = window.matchMedia("(max-width: 700px)")
		myFunction(x) // Call listener function at run time
		x.addListener(myFunction) // Attach listener function on state changes

			




		
		{{-- Parallax Effect --}}
       // starting position on window's scroll position
		var position = $(window).scrollTop();

		// each letter
		var i = $(".i");
		var e = $(".e");

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
		    i.css('top', iTop - 1);
		    iTop--;
		  } else {
		    iTop = 0;
		  }
		  if (eTop >= 0) {
		    e.css('top', eTop + 0.00001);
	    	eTop++;
	    		// Stop the letter passing
		    	if (eTop > 60){
		    		eTop = 60;
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
		    i.css('top', iTop + 1);
		    iTop++;
		  }

		  if (eTop >= 1 && eTop > eTopOriginal) {
		    e.css('top', eTop - 0.00001);
		    eTop--;
		  }
		}

@endsection


