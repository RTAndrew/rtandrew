<?php

use Illuminate\Database\Seeder;

class NotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        DB::table('notas')->insert([
            'nome' => '... quem ela era... quem ela foi...',
            'descricao' => 'Decidi fazer esta nota quando descobri que passava mais tempo a escrever de um paixao perdida... ',
            'background_color' => 'background: #ee9ca7; background: -webkit-linear-gradient(to right, #ffdde1, #ee9ca7); background: linear-gradient(to right, #ffdde1, #ee9ca7);',
			'background_color_fallback' => '#ee9ca7',
            'slug' => 'quem-ela-era-quem-ela-foi',
        ]);


        DB::table('notas')->insert([
            'nome' => 'Poesia Suja',
            'descricao' => '',
            'background_color' => 'background: #FF416C;  /* fallback for old browsers */
	background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);  /* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to right, #FF4B2B, #FF416C); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */',
            'background_color_fallback' => '#FF416C',
            'slug' => 'poesia-suja',
        ]);

        DB::table('notas')->insert([
            'nome' => 'O que o tempo nunca disse',
            'descricao' => '',
            'background_color' => 'background: #a8ff78;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #78ffd6, #a8ff78);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #78ffd6, #a8ff78); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */',
            'background_color_fallback' => '#a8ff78',
            'slug' => 'o-que-o-tempo-nunca-disse ',
        ]);
    }
}
