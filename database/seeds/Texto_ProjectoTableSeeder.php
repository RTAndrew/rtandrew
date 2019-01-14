<?php

use Illuminate\Database\Seeder;

class Texto_ProjectoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('texto_projecto')->insert([
            'titulo' => 'Allicia',
            'image_url' => 'https://res.cloudinary.com/db9ha9ox6/image/upload/v1533946229/rtandrew-site/texto_projecto/allicia.jpg',
            'descricao' => '',
            'slug' => 'allicia',
            'featured' => true,
            'view_count' => 5
        ]);

        

        DB::table('texto_projecto')->insert([
            'titulo' => 'Cinderella',
            'image_url' => 'https://res.cloudinary.com/db9ha9ox6/image/upload/v1533946226/rtandrew-site/texto_projecto/landscape.jpg',
            'descricao' => '',
            'slug' => 'cinderella',
            'featured' => true,
            'view_count' => 4
        ]);

        

        DB::table('texto_projecto')->insert([
            'titulo' => 'Pecado Capital',
            'image_url' => 'https://res.cloudinary.com/db9ha9ox6/image/upload/v1533946222/rtandrew-site/texto_projecto/illustrator.jpg',
            'descricao' => '',
            'slug' => 'pecado_capital',
            'featured' => true,
            'view_count' => 13
        ]);

        

        DB::table('texto_projecto')->insert([
            'titulo' => 'Best outfit a girl can wear',
            'image_url' => 'https://res.cloudinary.com/db9ha9ox6/image/upload/v1533946222/rtandrew-site/texto_projecto/quote-creator.png',
            'descricao' => '',
            'slug' => 'keep smiling, my dear. It is the best a girl can wear',
            'featured' => true,
            'view_count' => 19
        ]);



    }
}
