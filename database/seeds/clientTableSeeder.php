<?php

use Illuminate\Database\Seeder;

class clientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\clients::class, 1000000)->create();
        factory(App\clients::class)->delete();
    }
}
