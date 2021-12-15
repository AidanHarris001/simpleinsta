<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        //\App\Models\Account::factory()
          //  ->has(\App\Models\Account::factory()->count(10))
            //    ->create();
        //\App\Models\Post::factory()
          //  ->has(\App\Models\Post::factory()->count(30))
            //    ->create();
        //\App\Models\Comment::factory()
          //  ->has(\App\Models\Comment::factory()->count(90))
            //    ->create();
        $this->call(AccountTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(CommentTableSeeder::class);
    }
}
