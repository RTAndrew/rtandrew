<?php

use Illuminate\Database\Seeder;

class Foto_AlbumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        DB::table('foto_album')->insert([
            'foto_id' => '1',
            'album_id' => '2',
        ]);

        DB::table('foto_album')->insert([
            'foto_id' => '1',
            'album_id' => '3',
        ]);

        DB::table('foto_album')->insert([
            'foto_id' => '1',
            'album_id' => '4',
        ]);







        DB::table('foto_album')->insert([
            'foto_id' => '2',
            'album_id' => '2',
        ]);

        DB::table('foto_album')->insert([
            'foto_id' => '2',
            'album_id' => '3',
        ]);







        DB::table('foto_album')->insert([
            'foto_id' => '3',
            'album_id' => '1',
        ]);

        DB::table('foto_album')->insert([
            'foto_id' => '3',
            'album_id' => '4',
        ]);







        DB::table('foto_album')->insert([
            'foto_id' => '4',
            'album_id' => '1',
        ]);

        DB::table('foto_album')->insert([
            'foto_id' => '4',
            'album_id' => '2',
        ]);

        DB::table('foto_album')->insert([
            'foto_id' => '4',
            'album_id' => '3',
        ]);
    }
}
