@extends('layouts.main')


@section('titulo-pagina')

Quem Sou Eu - 

@endsection




@section('metatags')

	<meta name="description" content="Eis a oportunidade de conhecer um pouco sobre o Rtandrew Paul, as suas obras, o que lhe inspira, o seu trajecto e muito mais.">

	<!--FACEBOOK-->
	    <meta property="og:image" content="{{ asset('img/opengraph-image.png') }}">
	    <meta property="og:image:type" content="image/png">
	    <meta property="og:type" content="website" />
	    <meta property="og:url" content="{{ route('landing-page') }}"/>
	    <meta property="og:title" content="{{ config('app.name', 'Rtandrew Paul') }}" />
		<meta property="og:description" content="Eis a oportunidade de conhecer um pouco sobre o Rtandrew Paul, as suas obras, o que lhe inspira, o seu trajecto e muito mais." />

	<!-- TWITTER -->
		<meta name="twitter:card" content="summary" />
		{{-- <meta name="twitter:site" content="@PoetryFound" /> --}}
		<meta name="twitter:title" content="{{ config('app.name', 'Rtandrew Paul') }}" />
		<meta name="twitter:description" content="Eis a oportunidade de conhecer um pouco sobre o Rtandrew Paul, as suas obras, o que lhe inspira, o seu trajecto e muito mais." />
		<meta name="twitter:image" content="{{ asset('img/opengraph-image.png') }}" />


@endsection







@section('main')


<div class="about-page">
	

	<div class="hero-section">
		
		<div class="container">
			
			<div class="hero-content">
				
				<span class="hero__entrevista"> Entrevista: </span>
				<h1 class="hero__title">Quem Sou Eu?</h1>
				<p class="hero__description">Em uma entrevista, cheia de gargalos e pensamentos profundos, eis a oportunidade de conhecer um pouco sobre o Rtandrew Paul e as suas obras.</p>

			</div>

		</div>
	</div>

	<svg class="hero-background" viewBox="0 0 1440 80"><path d="M1447 80H0V36.335c236.146-48.447 491.094-48.447 764.843 0 218.605 38.687 445.99 38.687 682.157 0V80z" fill="#000" fill-rule="nonzero"></path></svg>
	

	<div id="wavejs" class="wavejs"></div>


	<span class="background-text">
		Nosce	
	</span>

	<span class="background-text">
		Te Ipsum	
	</span>
	

	<section class="entrevista container">

		<div class="entrevista__estatistica">
			<div class="data"> 2019 </div>
			@component('components.social-media-share')
				@slot('link')
					{{ route('quem-sou-eu') }}
				@endslot
				
				@slot('titulo')
					{{-- {{ $texto->titulo }} --}}
				@endslot
				
				@slot('descricao')
					{{-- {{ truncarMetaDescription($texto->descricao) }} --}}
				@endslot

				@slot('imagem')
					{{ asset(getSiteIdentityImage()) }}
				@endslot
			@endcomponent
		</div>

		<div class="entrevista__conteudo">
			<h1>Quem é você?</h1>
			<p>Acho que é muito mais fácil dizer quem eu gostaria de ser (risos).  <br>
Respondendo à pergunta, sou um personagem fictício trazido à realidade para alimentar o alter-ego, com o intuito de libertar e exprimir pensamentos livre de censuras.</p>


			<h1>De onde surgiu o nome Rtandrew? E qual é o seu significado?</h1>
			<p>Depois de ter feito alguns textos e decidir postá-los no Facebook, eu queria usar algo como <i>fingerprint ou signature</i>. Foi então que surgiram nomes como Poeta Tesudo, Poeta Nostálgico, Anderson Rodax e entre outros. Porém, senti que nenhum desses nomes tinha alguma personalidade. Passar algum tempo, o Rtandrew nasce como uma mistura de <b>RT</b> + <b>Andrew</b>. E para ser sincero, não há uma tradução literal. </p>


			<h1>Agora, antes de falar sobre a fotografia e a escrita, há que se saber o que lhe fez começar, o seu trajecto e o que fazia antes disso tudo. Como tudo começou? </h1>
			<p>Wow. Uma questão intrigante (risos). <br>
Apesar de nunca ter sido um ávido leitor, sempre tive um gosto pelas letras musicais. Havia vezes que gostava de criticar as letras, as métricas ou ainda as rimas das músicas que ouvia (rap na maioria das vezes), e, claro, sempre gostei de um bom texto. Então, acho que nunca estive muito distante da escrita em si.  <br>
Agora, para realmente escrever, isso foi incentivo de uma paixão. E foi também por intermédio desta que nasceu a minha nota <b>“…Quem Ela Era…Quem Ela Foi…”</b>, uma nota dedicada inteiramente às mulheres. <br> <br>
A fotografia surgiu quando passei a ter um gosto por eletrónicos, no qual a fotografia era uma boa forma de qualificar a qualidade de um smartphone. E foi exactamente o que fiz quando obtive o meu segundo smartphone em 2014, o HTC One M8 (considerado o melhor smartphone daquele ano. I don’t wanna brag about it. Lol).
 </p>

			<h1>A palavra filosofia é mencionada em alguns dos teus textos. Qual é o seu ponto de vista entre a filosofia e a arte? </h1>
			<p>Para mim a arte é uma das muitas formas e sombras que a filosofia possui. Ou seja, arte é também filosofar. Até porque, a filosofia na sua essência é procurar por uma resposta, e na arte a gente possui um poder avassalador de expressão para conosco ou com outrem.</p>
			
			<h1>Tocando num tema que se vem falando muito, como descreverias a felicidade? </h1>
			<p>Felicidade, felicidade... <br> É complicado. <br><br>
				Gosto de pensar que mundo em si é tristeza e tédio. E parafraseando os Fat Soldiers, a felicidade é um acontecimento acidental aonde o mínimo de jubilo pode superar uma maré de tristeza ou algum acontecimento trágico, nem que for por um curto período de tempo. Acho que também é importante ter noção que a felicidade e a infelicidade coexistem no ser humano, e nenhuma delas é totalmente constante. E não menos importante, a busca da felicidade pode nem sempre dar certo. 
			</p>
			
			<h1>Das diversas obras que já fez, se pudesse escolher duas de cada, quais seriam? </h1>
			<p>Eu poderia muito bem responder que a minha obra favorita é aquela que estou a fazer neste momento, mas como dei uma pausa… (risos)  <br> <br> 
				Tenho algumas favoritas, sim. Mas se fosse para escolher alguma em que passo mais tempo a pensar (mesmo depois de tanto tempo de conclusão) certamente que seriam os textos <i>“Aleida – A Viajante do Tempo” e “A Letter to My Love”</i>. E quanto a fotografia seria <i>“O Encontro de Dois Mundos…Será?”</i> e <i>“Behind The Mask” </i>. 

				<br>

				Um deles porque demorei algum tempo para terminá-lo, e além disso, pertence a uma das minhas melhores amigas e contém tudo e mais um pouco do que eu queria. Aqui vai um trecho: 
			</p>
			
		
		</div>

		<span class="align-blockquote">
			<div class="entrevista__blockquote">
				<blockquote>
					“Por isso é que ela vem e vai, no vaivém, <br> tal como as ondas do mar, sem planos de ficar.”
				</blockquote>
			</div>
		</span>

		<div class="entrevista__conteudo">
			<p>Já a foto, primordialmente por ser uma das minhas melhores fotos à cor, e a experiência ao fotografar. Digo sempre que uma das melhores coisas em fotografar é a experiência sendo vivida, e a capacidade que a imagem tem de contar uma história. </p>
		</div>

	
	</section>

		<section class="entrevista__imagem">
			<img src="{{ asset('img/foto/IMAG0010.jpg') }}" alt="">
		</section>
	
	<section class="entrevista container">
		
		<div class="entrevista__conteudo">
			<h1>Como artista, qual é o seu papel na sociedade? E o que acontece quando a sociedade não tem uma recepção esperada ou chega a ter uma recepção pejorativa do seu trabalho? </h1>
			<p>Sinceramente, é o que acontece no mundo da criatividade em geral. Um trabalho pode ser ou não bem apreciado, não dá para agradar todos. A criatividade é tão fantástica que permite vários ângulos, opiniões e incentiva uma tomada de consciência. <br>
O artista tem sempre uma visão diferente daquilo que lhe é requerido antes como pessoa e como cidadão. E essa visão artística é importante para desafiar o convencionalismo. Caso contrário seriamos apenas simples humanos regidos por leis que ameaçam o nosso intelecto. <br>
Claro, nem todos os artistas são aprovados ou recebidos porque (com as palavras da própria sociedade) estes atentam contra a moral da sociedade. E se há algo de difícil dentre todo processo criativo, é a revisão e a opinião pública. </p>

			<h1>O que lhe inspira e quais são outros artistas que acompanhas? </h1>
			<p>O universo, tal como ele é, já é uma grande fonte de inspiração. Por isso, acredito que não é fácil acordar todos os dias com novos olhos para apreciar a beleza colateral que o universo tem a oferecer. </p>
		</div>

		<span class="align-blockquote">
			<div class="entrevista__blockquote">
				<blockquote>
					“Olhar para um defeito e achar algo belo nele requer um nível extremo de loucura.”
				</blockquote>
			</div>
		</span>

		<div class="entrevista__conteudo">
			<p> É muito complicado e injusto, dos artistas que sigo, nomear apenas alguns, mas prontos… <br>
Allicia Santos, Mauro Sérgio, Not Flavio, Jesseartes, Karlos Scesar, Adrian McDonald, Kali Arstistry, Pedro Belgio, Luis da Silva, Widralino, Janeth Oliveira, Ylson Menezes, Hermes Knox, João Lando, Molhado Poeta, O Poeta das Profundezas, O poeta dos pés descalços, Maria Rokapa, Cesar Acosta, Vuh Landes, Aaron Ball, Alex Bailey, Renata Leão e tantos outros.  </p>

			<h1>O que gostarias de alcançar/fazer no mundo da escrita e fotografia? 
			</h1>
			<p>De certeza que seria fundir a escrita com a fotografia, de certa maneira. Eu tentei, mas miseravelmente. Mas sinto que tivesse de tentar novamente, faria de outra maneira. </p>

			<h1>Qual é a parte mais difícil em fotografar e escrever? </h1>
			<p>Para mim, escrever é muito mais difícil, isso devido a nostalgia. Escrever sobre lugares em que nunca estiveste, recriar cenas que aconteceram, voltar no tempo e escrever o que poderia ter acontecido, criar um mundo onde habitam pessoas…epah, um monte coisas. Enquanto que na fotografia, é sempre tentar fazer o melhor e diferente, ou seja um hit and miss. Mas não é só isto. Poder fazer uma foto que por si só conta uma história é simplesmente magnífico e incrivelmente difícil de conseguir… por vezes ela simplesmente acontece.</p>
		</div>
		
		<span class="align-blockquote">
			<div class="entrevista__blockquote">
				<blockquote>
					“Loucura está nos olhos de quem vê a beleza.”
				</blockquote>
			</div>
		</span>


		<div class="entrevista__conteudo">
			<h1>Por que intitular a sua exposição de <i>“Ex Umbra In Solem”</i> ? Qual é o seu significado?</h1>
			<p><i>Ex Umbra In Solem</i>, do latim, significa <i>Da Sombra Para Luz</i>. Escolhi esse nome porque foi na infelicidade e em momento de caos que comecei a questionar quem realmente era, a minha origem e o meu propósito. Foi naquele tempo que procurei por lugares que me faziam sentir confortável, e procurei fazer o máximo de coisas até descobrir qual seria a minha capacidade de adaptação e endurance. E dentre tudo isto, a escrita e fotografia nasceram quase que de forma sequencial.  </p>

			<h1>E por fim, a última, mas não menos importante, qual é o seu conselho para as outras pessoas? </h1>
			<p>Tu és quem tu és. E se não sabes, deverias começar a te questionar. <br>
			E claro, carpe diem e malembe malembe. (risos) 
			</p>
		</div>

	</section>
</div>






@endsection


@section('script-full')

<script src="{{ asset('vendor/wavejs/wave.min.js') }}"></script>
<script>

	var wave = new Wave('#wavejs');
	wave.animate();  

</script>

@endsection
