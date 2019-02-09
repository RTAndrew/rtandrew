{
	"@type":"ListItem",
	"position":"{{ $loop->iteration }}",
	"name": "{{ $foto->titulo }}",
	"url": "{{ route('foto', $foto->slug) }}"
}