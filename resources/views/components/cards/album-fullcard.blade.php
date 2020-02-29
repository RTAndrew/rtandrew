<div class="grid-card album-grid-sidenav">
    @foreach ($albuns as $album)
        <a href="{{ route('album', $album->slug)}}" class="grid-card__card grid-card--album foto__wrapper"  style="background: linear-gradient(
		      rgba(0, 0, 0, 0),
		      rgba(0, 0, 0, 0.70)
		    ), url('{{ cloudinaryImagePath($album->image_hero_url, '10') }}') no-repeat center center fixed; 
		  -webkit-background-size: cover;">
            {{-- <img src="{{ cloudinaryImagePath($album->image_hero_url, '20') }}" alt="{{ $album->titulo }}" title="{{ $album->titulo }}"> --}}
            <div class="album__details">
                <p class="album__titulo"> {{ $album->titulo }} </p>
               
					<span class="album__num-photo">
						<img class="icon" src=" {{ asset('img/icons/image--filled.svg') }} " alt="photo count icon">
						<p>{{ $album->foto->count() }}</p>
					</span>

            </div> 
        </a>
    @endforeach
</div>