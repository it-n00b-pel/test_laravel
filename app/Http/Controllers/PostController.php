<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
    //
    public function index() {
        $posts = Post::all();
        $post = $posts->where('is_published', 0)->first();
//        dd($post);
        return view('posts', compact('posts'));
    }

    public function create() {
        $postArr = [['title' => 'some title 1', 'content' => 'some content 1', 'image' => 'some title 1', 'likes' => 10, 'is_published' => 1,

        ], ['title' => 'some title 2', 'content' => 'some content 2', 'image' => 'some title 1', 'likes' => 123, 'is_published' => 0]];

        foreach ($postArr as $item) {
            Post::create($item);
        }
        dd('created');
    }

    public function update() {
        $post = Post::all()->find(2);

        $post->update(['title' => 'new TITLE']);

        dd('update');

    }

    public function delete() {
//        $post = Post::all()->find(3);
//        $post->delete();
//        dd($post);
        $post = Post::withTrashed()->find(3);
        $post->restore();
        dd($post);
    }

    public function firstOrCreate() {
//        dd('start');

        $post = Post::firstOrCreate([
            'title' => 'new 1',
            'content'=>'some content 2'
        ], ['title' => 'new 1',
            'content' => 'some new content 2',
            'image' => 'some title 1',
            'likes' => 10000,
            'is_published' => 0]);

        dd('finished');
    }
    public function updateOrCreate() {
//        dd('start');

        $post = Post::updateOrCreate([
            'title' => '!!!some title 2'
        ], ['title' => '!!!some title 2',
            'content' => 'NEW',
//            'image' => 'some title 1',
            'likes' => 10000,
            'is_published' => 0]);

        dd('finished');
    }

}
