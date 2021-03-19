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
            'title' => 'Post1',
            'author' => 'Author1',
            'content' => 'Text'
        ]);

        Post::create([
            'title' => 'Post2',
            'author' => 'Author2',
            'content' => 'Text2'
        ]);
    }
}
