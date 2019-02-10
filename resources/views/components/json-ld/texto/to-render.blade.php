<script type="application/ld+json">

{
	"@context":"https://schema.org",
	"@type":"ItemList",
	"numberOfItems": "{{ $textos->count() }}",
	"mainEntityOfPage":{
		"@type":"CollectionPage",
		"@id":"{{ URL::current() }}"
	},
	"itemListElement": [
		@if ($textos->count() < 2)
			{{-- do nothing --}}
			{{-- because google requires --}}
			{{-- atleast two items --}}
		@else
		{{-- DONT FORGET THE COMMA --}}
		{{-- Otherwise JSON will go crazy --}}
			@foreach ($textos as $texto)
				@if ($loop->first)
					@include('components.json-ld.texto.separated-list'),
				@elseif ($loop->last)
					@include('components.json-ld.texto.separated-list')
				@else
				 	@include('components.json-ld.texto.separated-list'),
				@endif
			@endforeach
		@endif
	]
}
</script>