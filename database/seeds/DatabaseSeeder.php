<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        factory(App\User::class)->create([
            'name' => 'MinhTuDao',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'), // secret
            'remember_token' => str_random(10),
            'level'=> 0
        ]);
        // $this->call(UsersTableSeeder::class);
        // $this->call(FeedBackSeerder::class);
        factory(App\Models\FeedBack::class,20)->create();
        factory(App\Models\Customer::class,20)->create();
        factory(App\Models\TradeMark::class,15)->create();
        factory(App\User::class,5)->create();
        
        $categories = ['Nam','Nữ','Đôi','Trẻ em'];
        foreach($categories as $category){
            factory(App\Models\Category::class)->create([
                'category_name' => 'Đồng hồ '.$category
            ]);
        }
        factory(App\Models\TradeMarkCategory::class,30)->create();
        factory(App\Models\Product::class,100)->create()->each(function($u){
            $u->detail()->save(factory(App\Models\ProductDetail::class)->make());
        });
    }
}
