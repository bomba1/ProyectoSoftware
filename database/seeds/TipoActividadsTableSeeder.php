<?php

use Illuminate\Database\Seeder;

class TipoActividadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\TipoActividad::class, 3 )->create();
    }
}
