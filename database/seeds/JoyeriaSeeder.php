<?php

use Illuminate\Database\Seeder;

class JoyeriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Joyeria::class,10)->create();
    }
}
