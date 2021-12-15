<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment = Comment::factory()->count(90)->create();
    }
}
