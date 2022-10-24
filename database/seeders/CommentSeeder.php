<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'user_id' => 1,
            'post_id' => 1,
            'comment' => 'テストコメント',
        ]);
        Comment::create([
            'user_id' => 1,
            'post_id' => 5,
            'comment' => 'テストコメント2',
        ]);
        Comment::create([
            'user_id' => 1,
            'post_id' => 5,
            'comment' => 'テストコメント3',
        ]);
        Comment::create([
            'user_id' => 1,
            'post_id' => 5,
            'comment' => 'テストコメント4',
        ]);
        Comment::create([
            'user_id' => 1,
            'post_id' => 5,
            'comment' => 'テストコメント4',
        ]);
        Comment::create([
            'user_id' => 1,
            'post_id' => 5,
            'comment' => 'テストコメント4',
        ]);
        Comment::create([
            'user_id' => 1,
            'post_id' => 2,
            'comment' => 'テストコメント4',
        ]);
        Comment::create([
            'user_id' => 1,
            'post_id' => 2,
            'comment' => 'テストコメント4',
        ]);
        Comment::create([
            'user_id' => 1,
            'post_id' => 2,
            'comment' => 'テストコメント4',
        ]);
        Comment::create([
            'user_id' => 1,
            'post_id' => 3,
            'comment' => 'テストコメント4',
        ]);
        Comment::create([
            'user_id' => 1,
            'post_id' => 3,
            'comment' => 'テストコメント4',
        ]);
        Comment::create([
            'user_id' => 1,
            'post_id' => 2,
            'comment' => 'テストコメント4',
        ]);
        Comment::create([
            'user_id' => 1,
            'post_id' => 4,
            'comment' => 'テストコメント4',
        ]);
        Comment::create([
            'user_id' => 1,
            'post_id' => 4,
            'comment' => 'テストコメント4',
        ]);
    }
}
