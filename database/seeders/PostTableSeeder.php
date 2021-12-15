<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;


class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new Post;
        $p->photo = "Replace with photo";
        $p->account_id = 1;
        $p->save();

        $post = Post::factory()->count(30)->create();
    }
}
