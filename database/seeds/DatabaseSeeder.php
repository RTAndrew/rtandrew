<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        $this->call(NotasTableSeeder::class);
        
        $this->call(TextosTableSeeder::class);
            
            $this->call(Texto_NotaTableSeeder::class);

        
        


        $this->call(Texto_ProjectoTableSeeder::class);
        
        $this->call(Projecto_TxtTableSeeder::class);
        
       

        $this->call(AlbunsTableSeeder::class);
        
        $this->call(FotosTableSeeder::class);
        
        



        // $this->call(UsersTableSeeder::class);
        
        // $this->call(UsersTableSeeder::class);

    }
}
