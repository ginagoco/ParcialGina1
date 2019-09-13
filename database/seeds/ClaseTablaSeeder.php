<?php

use Illuminate\Database\Seeder;

class ClaseTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Clase::class,10)
        ->create()
        ->each(function ($clase){
        	$clase->actividades()->save(factory(App\Models\Actividad::class)->make());
        });
    }
}
