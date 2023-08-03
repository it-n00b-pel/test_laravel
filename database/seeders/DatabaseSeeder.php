<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {

        Category::factory(21)->create();
        $tags = Tag::factory(37)->create();
        $posts = Post::factory(98)->create();

        $posts->map(function ($post) use ($tags) {
            $tagsCount = random_int(1, 9);
            $tagsForPostIds = $tags->random($tagsCount)->pluck('id');
            $post->tags()->attach($tagsForPostIds);
        });
    }
}
