<?php

use Illuminate\Database\Seeder;

class Texto_NotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        
        DB::table('nota_texto')->insert([
            'texto_id' => '2',
            'nota_id' => '3',
        ]);

        
        DB::table('nota_texto')->insert([
            'texto_id' => '3',
            'nota_id' => '1',
        ]);


        DB::table('nota_texto')->insert([
            'texto_id' => '5',
            'nota_id' => '2',
        ]);


        DB::table('nota_texto')->insert([
            'texto_id' => '6',
            'nota_id' => '3',
        ]);


    }
}
