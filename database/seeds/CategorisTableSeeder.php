<?php

use Illuminate\Database\Seeder;

class CategorisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Sys\Category::class,15)->create();
    }
}
