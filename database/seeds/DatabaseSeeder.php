<?php

use Illuminate\Database\Seeder;
use App\User;
Use App\Model\Category;
Use App\Model\Question;
Use App\Model\Reply;
Use App\Model\Like;



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
        factory(User::class,10)->create();
        factory(Category::class,5)->create();
        factory(Question::class,10)->create();
        factory(Reply::class,50)->create()->each(function($reply){
            return $reply->like()->save(factory(Like::class)->make());
        });
    }
}
