{{-- This thing has errors --}}
{{-- Betta be validated before using it --}}


{
	"@type":"ListItem",
	"position":"{{ $loop->iteration }}",
	"item": {
        "@type": ["BlogPosting", "CreativeWork"],
	    "image": "http://rtandrew.com/img/opengraph-image.png",
	    "url": "{{ route('fotos.foto', $foto->slug) }}",
	    "headline": "{{ $foto->titulo }}",
	    "dateCreated": "{{ $foto->created_at }}",
	    "datePublished": "{{ $foto->created_at }}",
	    "dateModified": "{{ $foto->updated_at }}",
	    "inLanguage": "pt",
	    "copyrightYear": "{{ date('Y') }}",
	    "copyrightHolder": {
			"@type": "Person",
			"name": "Rtandrew Paul"
		},
	    "contentLocation": {
	      "@type": "Place",
	      "name": "Luanda, Angola"
	    },
	    "author": {
	      "@type": "Organization",
	      "name": "Rtandrew Paul"
	    },
	    "creator": {
	      "@type": "Person",
	      "name": "Rtandrew Paul"
	    },
	    "publisher": {
			"@type": "Organization",
			"name": "Rtandrew Paul",
			"url": "{{ url('/') }}",
			"logo": {
				"@type": "ImageObject",
				"url": "{{ asset('img/logo-black.svg') }}"
			}
		},
	    "mainEntityOfPage": "True",
	    "keywords": [
	      "fotos",
	      "fotografos amadores de angola",
	      "fotos de luanda"
	    ],
	    "articleBody": "{!! convertText2UTF($foto->descricao) !!}",
	    "interactionStatistic": {
		    "@type": "InteractionCounter",
		    "userInteractionCount": "{{ $foto->view_count }}"
		}
    }
}