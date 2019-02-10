{{-- This thing has errors --}}
{{-- Betta be validated before using it --}}


{
	"@type":"ListItem",
	"position":"{{ $loop->iteration }}",
	"item": {
        "@type": ["BlogPosting", "CreativeWork"],
	    "image": "{{ asset('img/opengraph-image.png') }}",
	    "url": "{{ route('textos.texto', $texto->slug) }}",
	    "headline": "{{ $texto->titulo }}",
	    "dateCreated": "{{ $texto->created_at }}",
	    "datePublished": "{{ $texto->created_at }}",
	    "dateModified": "{{ $texto->updated_at }}",
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
	      "textos",
	      "poemas angolanos",
	      "pensamentos",
	      "poesia",
	      "poema de escritores angolanos",
	      "prosa"
	    ],
	    "articleBody": "{!! convertText2UTF($texto->descricao) !!}",
	    "interactionStatistic": {
		    "@type": "InteractionCounter",
		    "userInteractionCount": "{{ $texto->view_count }}"
		}
    }
}