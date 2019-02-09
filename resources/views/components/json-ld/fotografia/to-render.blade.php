<script type="application/ld+json">

{
	"@context":"https://schema.org",
	"@type":"ItemList",
	"numberOfItems": "{{ $fotos->count() }}",
	"mainEntityOfPage":{
		"@type":"CollectionPage",
		"@id":"{{ URL::current() }}"
	},
	"itemListElement": [
		@if ($fotos->count() < 2)
			{{-- do nothing --}}
			{{-- because google requires --}}
			{{-- atleast two items --}}
		@else
		{{-- DONT FORGET THE COMMA --}}
		{{-- Otherwise JSON will go crazy --}}
			@foreach ($fotos as $foto)
				@if ($loop->first)
					@include('components.json-ld.fotografia.separated-list'),
				@elseif ($loop->last)
					@include('components.json-ld.fotografia.separated-list')
				@else
				 	@include('components.json-ld.fotografia.separated-list'),
				@endif
			@endforeach
		@endif
	]
}
</script>