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
    	$this->call(CursoTablaSeeder::class);
        $this->call(ClaseTablaSeeder::class);
    }
}
