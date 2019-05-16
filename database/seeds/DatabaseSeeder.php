<?php

use Illuminate\Database\Seeder;
use app\Model\Product;
use app\Model\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Model\Product::class, 50)->create();



        factory(App\Model\Review::class, 400)->create();
    }
}
