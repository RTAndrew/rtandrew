<?php

use Illuminate\Database\Seeder;

class Projecto_TxtTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        DB::table('projecto_txt')->insert([
            'nome' => '... Quem ela era... quem ela foi... ',
            'descricao' => 'Um projecto complementar a nota original "...Quem Ela... Quem Ela Foi..." com o intuito de fotografar às pessoas a quem me inspirei para escrever. ',
            'slug' => 'quem-ela-era-quem-ela-foi'
        ]);


        DB::table('projecto_txt')->insert([
            'nome' => 'Poesia Urbana',
            'descricao' => 'Compartilhar poesia, escritos, ou poemas de forma discreta possível',
            'slug' => 'poesia-urbana'
        ]);


        DB::table('projecto_txt')->insert([
            'nome' => 'Quote Creator',
            'descricao' => 'Em homenagem ao aplicativo "Quote Creator" que me permitiu escrever trechos das minhas escritas, com o intuito de ser curto e grosso',
            'slug' => 'quote-creator'
        ]);
    }
}
