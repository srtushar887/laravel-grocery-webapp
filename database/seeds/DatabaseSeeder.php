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
        // $this->call(UserSeeder::class);
//        factory(\App\top_category::class,30)->create();
//        factory(\App\brand::class,30)->create();
        factory(\App\product::class,100)->create();
    }
}
