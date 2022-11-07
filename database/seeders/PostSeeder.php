<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'user_id' => 1,
            'name' => 'ポスト１',
            'contents' => 'ポスト１のコンテンツ',
        ]);
        Post::create([
            'user_id' => 2,
            'name' => 'ポスト2',
            'contents' => 'ポスト2のコンテンツ',
        ]);
        Post::create([
            'user_id' => 3,
            'name' => 'ポスト3',
            'contents' => 'ポスト3のコンテンツ',
        ]);
        Post::create([
            'user_id' => 4,
            'name' => 'ポスト4',
            'contents' => 'ポスト4のコンテンツ',
        ]);

    }
}
