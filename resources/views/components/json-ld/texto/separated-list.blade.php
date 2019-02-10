{
	"@type":"ListItem",
	"position":"{{ $loop->iteration }}",
	"name": "{{ $texto->titulo }}",
	"url": "{{ route('textos.texto', $texto->slug) }}"
}