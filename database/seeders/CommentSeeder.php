<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
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
        $postId = Post::where('title', 'Post1')->first()->id;

        Comment::create([
            'post_id' => $postId,
            'author' => 'AuthorK1',
            'content' => 'TextK'
        ]);

        Comment::create([
            'post_id' => $postId,
            'author' => 'AuthorK2',
            'content' => 'TextK2'
        ]);

        $postId = Post::where('title', 'Post2')->first()->id;

        Comment::create([
            'post_id' => $postId,
            'author' => 'AuthorK1',
            'content' => 'TextK21'
        ]);

    }
}
