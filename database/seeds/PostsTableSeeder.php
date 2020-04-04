<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Post::create([
            'title'=>'Hello world!',
            'slug'=>'hello-world',
            'content'=>'<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>',
            'user_id'=>1,
            'category_id'=>1
        ]);
    }
}
