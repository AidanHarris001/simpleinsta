<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;


class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = new Post;
        $c->content = "Yo this is sick!!!";
        $c->account_id = 1;
        $c->post_id = 1;
        $c->save();

        $comment = Comment::factory()->count(90)->create();
    }
}
