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
        // $this->call(UsersTableSeeder::class);
        // $this->call(FeedBackSeerder::class);
        factory(App\Models\FeedBack::class,20)->create();
        factory(App\Models\Customer::class,20)->create();
        factory(App\User::class,5)->create();
    }
}
