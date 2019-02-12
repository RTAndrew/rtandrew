



{{-- Link --}}
{{-- Titulo --}}
{{-- Descricao --}}
{{-- Imagem --}}




<div class="social-media-share">
	<p class="social-media-share__text">Partilhar na net: </p>
	
	<a class="social-media-share__icon" href="https://twitter.com/intent/tweet?url={{ $link }}&text={{ $titulo }}" class="social-media-share__button" target="_blank"  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
		<img src="{{ asset('img/icons/social-midia/c-twitter.svg') }}" alt="Twitter Icon" title="Share on Twitter">	
	</a>
	
	<a class="social-media-share__icon" href="https://www.facebook.com/sharer/sharer.php?u={{ $link }}" target="_blank"  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
		<img src="{{ asset('img/icons/social-midia/c-facebook.svg') }}" alt="Facebook Icon" title="Share on Facebook">
	</a>
	
	<a class="social-media-share__icon" href="https://www.pinterest.com/pin/create/button/" data-pin-id="" data-pin-do="buttonPin" 
	data-pin-media="@if ($imagem == '' || $imagem == null) {{ asset('img/opengraph-image.jpg') }} @else	{{ $imagem }} @endif" target="_blank">
		{{-- <img src="{{ asset('img/icons/social-midia/c-pinterest.svg') }}" alt="Pinterest Icon" title="Share on Pinterest"> --}}
	</a>
</div>







{{-- <div class="social-media-share">
	<p class="social-media-share__text">Partilhar na net: </p>
	
	<a href="http://twitter.com/share?text=titulo&url=rout" class="social-media-share__button" target="_blank"  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
		<img class="social-media-share__icon" src="{{ asset('img/icons/social-midia/twitter.svg') }}" alt="Twitter Icon" title="Share on Twitter">	
	</a>
	
	<a href="https://www.facebook.com/sharer/sharer.php?u=rodax.com" target="_blank"  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
		<img class="social-media-share__icon" src="{{ asset('img/icons/social-midia/facebook.svg') }}" alt="Facebook Icon" title="Share on Facebook">
	</a>
	
	<a href="https://pinterest.com/pin/create/button/?url=Imagesource&media=Titulo&description=asdadsmdasdas" class="social-media-share__button" target="_blank"  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
		<img class="social-media-share__icon" src="{{ asset('img/icons/social-midia/pinterest.svg') }}" alt="Pinterest Icon" title="Share on Pinterest">
	</a>
</div> --}}