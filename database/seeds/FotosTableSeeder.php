<?php

use Illuminate\Database\Seeder;

class FotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('fotos')->insert([
            'titulo' => 'landscape',
            'descricao' => '',
            'image_url' => 'http://res.cloudinary.com/db9ha9ox6/image/upload/v1533631413/samples/landscapes/landscape-panorama.jpg',
            'slug' => 'landscape_panorama',
            'featured' => false,
            'view_count' => 5
        ]);

        DB::table('fotos')->insert([
            'titulo' => 'Kitten',
            'descricao' => 'What an adorable kitten playing, isnt it?',
            'image_url' => 'http://res.cloudinary.com/db9ha9ox6/image/upload/v1533631411/samples/animals/kitten-playing.gif',
            'slug' => 'kitten-playing',
            'featured' => false,
            'view_count' => 13
        ]);

        DB::table('fotos')->insert([
            'titulo' => 'Beatiful Cloudinary people',
            'descricao' => 'well, just a bunch of folks',
            'image_url' => 'http://res.cloudinary.com/db9ha9ox6/image/upload/v1533631409/samples/cloudinary-group.jpg',
            'slug' => 'cloudinary-group',
            'featured' => false,
            'view_count' => 45
        ]);

        DB::table('fotos')->insert([
            'titulo' => 'Life is Good',
            'descricao' => 'Say no more, pal',
            'image_url' => 'http://res.cloudinary.com/db9ha9ox6/image/upload/v1533631404/samples/landscapes/beach-boat.jpg',
            'slug' => 'beach-boat',
            'featured' => false,
            'view_count' => 24
        ]);
    }
}
