<?php

use Illuminate\Database\Seeder;

class AlbunsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('albuns')->insert([
            'titulo' => 'Motocross',
            'descricao' => 'Team Orbel e entre outros',
            'slug' => 'motocross',
            'image_hero_url' => '',
            'view_count' => 5
        ]);

        DB::table('albuns')->insert([
            'titulo' => 'Insolitus',
            'descricao' => '',
            'slug' => 'insolitus',
            'image_hero_url' => '',
            'view_count' => 15
        ]);

        DB::table('albuns')->insert([
            'titulo' => 'Carnavel Luanda 2017',
            'descricao' => 'Carnaval é deixar-se levar pela euforia. Fazer do apito o nosso ritmo, o batuque de nosso coração, dos olhares povo o nosso oxigênio... É neste momento que as almas confinadas de tédio são acordadas pela a alegria em sentir as vibrações das tribos, raças, culturas e costumes.',
            'image_hero_url' => '',
            'slug' => 'carnaval-luanda-2017',
            'view_count' => 63
        ]);

        DB::table('albuns')->insert([
            'titulo' => 'BroTT - Brothers de Todo Terreno',
            'descricao' => 'Todas as aventuras capturadas quando, quer treino ou não, ando de bicicleta.',
            'image_hero_url' => '',
            'slug' => 'btt',
            'view_count' => 41
        ]);

        DB::table('albuns')->insert([
            'titulo' => 'Foto-Tese',
            'descricao' => 'Clamando pela minha Negrologia',
            'slug' => 'foto-tese',
            'image_hero_url' => '',
            'view_count' => 69
        ]);
    }
}
