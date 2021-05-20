<?php

use Illuminate\Database\Seeder;
use App\Post;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'Come fare per',
                'topic' => 'marketing',
                'author' => 'John',
                'date' => '2021-06-05',
                'description' => 'lorem ipsum'
            ],
            [
                'title' => 'Come fare quando',
                'topic' => 'seo',
                'author' => 'Jenny',
                'date' => '2021-06-04',
                'description' => 'lorem ipsum'
            ],
            [
                'title' => 'Come fare se',
                'topic' => 'Advertising',
                'author' => 'Sam',
                'date' => '2021-06-12',
                'description' => 'lorem ipsum dolor'
            ]
        ];

        foreach ($posts as $post) {
            $new_post = new Post();

            $new_post->title = $post['title'];
            $new_post->topic = $post['topic'];
            $new_post->author = $post['author'];
            $new_post->date = Carbon::createFromFormat('Y-m-d', $post['date'])->toDateTimeString();
            $new_post->description = $post['description'];

            $new_post->save();
        }
    }
}
