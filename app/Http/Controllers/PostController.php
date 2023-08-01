<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller {
    //
    public function index() {
//        $posts = Post::all();
//        $post = $posts->where('is_published', 0)->first();
//        $category = Category::all()->find(1);

//        $post = Post::find(2);
        $tag = Tag::find(1);
//        dd($post->tags);
        dd($tag->post);
//        $posts = Post::where('category_id', $category->id)->get();

//        dd($category->posts);
//        dd($post);
//        return view('post.index', compact('posts'));
    }

    public function create() {
//        $postArr = [['title' => 'some title 1', 'content' => 'some content 1', 'image' => 'some title 1', 'likes' => 10, 'is_published' => 1,
//
//        ], ['title' => 'some title 2', 'content' => 'some content 2', 'image' => 'some title 1', 'likes' => 123, 'is_published' => 0]];
//
//        foreach ($postArr as $item) {
//            Post::create($item);
//        }
//        dd('created');
        return view('post.create');
    }

    public function store() {
        $data = request()->validate(['title' => 'string', 'content' => 'string', 'image' => 'string', 'likes' => 'integer']);

        Post::create($data);
        return redirect()->route('post.index');
    }

    public static function show(Post $post) {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post) {
        return view('post.edit', compact('post'));
    }

    public function update(Post $post) {
        $data = \request()->validate(['title' => 'string', 'content' => 'string', 'image' => 'string', 'likes' => 'integer']);
//        dd($data);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('post.index');
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

        $post = Post::firstOrCreate(['title' => 'new 1', 'content' => 'some content 2'], ['title' => 'new 1', 'content' => 'some new content 2', 'image' => 'some title 1', 'likes' => 10000, 'is_published' => 0]);

        dd('finished');
    }

    public function updateOrCreate() {
//        dd('start');

        $post = Post::updateOrCreate(['title' => '!!!some title 2'], ['title' => '!!!some title 2', 'content' => 'NEW', //            'image' => 'some title 1',
            'likes' => 10000, 'is_published' => 0]);

        dd('finished');
    }

}
