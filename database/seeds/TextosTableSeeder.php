<?php

use Illuminate\Database\Seeder;

class TextosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('textos')->insert([
            'titulo' => 'The Moon Behind The Grey Clouds',
            'descricao' => 'Damn, that shit is way to long, thou',
            'slug' => 'the-moon-behind-the-grey-clouds',
            'featured' => false,
            'view_count' => 6
        ]);






        DB::table('textos')->insert([
            'titulo' => 'Oásis',
            'descricao' => 'Dar-te um beijo na testa e sentir cheiro dos teus cachos
Destarte, perceber que o meu mundo orbita no teu oásis.',
            'slug' => 'oasis',
            'featured' => false,
            'view_count' => 13
        ]);






        DB::table('textos')->insert([
            'titulo' => 'Viajante do Tempo - Aleida',
            'descricao' => 'Ela dispensa os planos
Vive sem contar os dias 
Os anos
As semanas 
Os meses... Ou ainda os ex-namorados ',
            'slug' => 'aleida',
            'featured' => true,
            'view_count' => 6
        ]);






        DB::table('textos')->insert([
            'titulo' => 'Bia Beata',
            'descricao' => 'Ó, minha nossa senhora! A beleza é uma doce chamada sedutora à morte!
Tanto lhe amo, que continuar vivo não passa de uma questão de sorte! ',
            'slug' => 'bia-beata',
            'featured' => true,
            'view_count' => 57
        ]);






        DB::table('textos')->insert([
            'titulo' => 'Cabernet Sauvignon',
            'descricao' => 'Degustar é ter a tua boca como decanter...',
            'slug' => 'carbenet-sauvignon',
            'featured' => true,
            'view_count' => 29
        ]);





        DB::table('textos')->insert([
            'titulo' => 'Bilhete de Passagem',
            'descricao' => 'Uns viajam para esquecer, eu viajo para recordar
Quer das tristezas, quer das felicidades
Para espairecer, me achar
Tanto das vivências, quer das afinidades',
            'slug' => 'bilhete-de-passagem',
            'featured' => true,
            'view_count' => 51
        ]);





        DB::table('textos')->insert([
            'titulo' => 'Amor sem destinatário',
            'descricao' => 'É o caso dos acasos
Do destino mal destinado
Sem remetente, sem destinatário
O amor mal premeditado que vive no açúcar amargurado',
            'slug' => 'amor-sem-destinatario',
            'featured' => true,
            'view_count' => 64
        ]);






        DB::table('textos')->insert([
            'titulo' => 'On-line',
            'descricao' => 'Que voz tão jovem me acorda nesta manhã?  
Que corpo é este, tão terno e afável, que jaz sobre o meu?
Que alma febril é esta, que me faz companhia nesta cama tão gelada como o céu?
Que luz é esta, que entra, escapando pelo do buraco da janela coberto por cortinas semiabertas? 
Que luz fraca e laranja é esta, que aterra nestes corpos imaculados, despidos como anjos, que nos queima com a sua magia matinal?

',
            'slug' => 'on-line',
            'featured' => false,
            'view_count' => 6
        ]);






        DB::table('textos')->insert([
            'titulo' => 'Literatura do Amor',
            'descricao' => 'Meu amor agora vive nas tintas
Entre linhas
Mudando sempre de linha
Até virar páginas
Escrevendo sobre desgraças
Ponto!
Agora passa essa linha
Para costurar o peito rasgado
Vírgula!
Para descansar e respirar fundo
Espreguiçar a mente pra escrever novos conteúdos
Contudo...
Ponto e vírgula!
É dessa que um novo amor entra na minha vida
Para me dar belos motivos para escrever belas poesias
Reticências!
A parte em que ultrapassamos a paixão
E enxergamos a clareza do coração
Etc...
Já se conhece a história de cor
Vou pulando mais um capitulo mal escrito
nas páginas do mesmo livro
Resiliência!
Prontos! Quem nunca?!
Nesse oceano navego, ou melhor, sou arrastado
Dentro de uma garrafa totalmente bêbado
Rezando que as tempestades se acalmem
E que as ondas, com a ajuda dos ventos,
Me devolvam ela nos meus pensamentos
Poha, fudeu. Me lembrei dela...
Erro!!!
O pior é que amor fracassado não leva corrector.

Redator, bota aí um ponto de exclamação!

Preciso de um caderno novo...',
            'slug' => 'literatura-do-amor',
            'featured' => false,
            'view_count' => 6
        ]);





    }
}
