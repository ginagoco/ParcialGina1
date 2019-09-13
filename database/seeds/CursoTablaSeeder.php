<?php

use Illuminate\Database\Seeder;

class CursoTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Curso::class,10)->create();
    }
}
