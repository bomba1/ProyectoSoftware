<?php

use Illuminate\Database\Seeder;

class ComisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Comision::class,10)->create();
    }
}
