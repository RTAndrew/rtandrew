
{{-- If text has no image 
	to load a different file
--}}
	@if ($texto->image_url == null)
		@include('pages.texto.texto--no-image')
	@else
		@include('pages.texto.texto--with-image')
	@endif