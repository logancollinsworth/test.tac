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
        $this->call(ImageTableSeeder::class);
        $this->call(StoresTableSeeder::class);
        $this->call(HeroTableSeeder::class);
    }
}
