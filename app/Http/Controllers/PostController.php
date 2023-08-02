<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller {
    //
    public function index() {
        $posts = Post::all();
        return view('post.index', compact('posts'));
//        $post = $posts->where('is_published', 0)->first();
//        $category = Category::all()->find(1);
//        $post = Post::find(2);
//        $tag = Tag::find(1);
//        dd($post->tags);
//        dd($tag->post);
//        $posts = Post::where('category_id', $category->id)->get();
//        dd($category->posts);
//        dd($post);
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
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', compact('categories', 'tags'));
    }

    public function store() {
        $data = request()->validate([
            'title' => 'required|string',
            'content' => 'string',
            'image' => 'string',
            'likes' => 'integer',
            'category_id' => '',
            'tags'=>''
        ]);

        $tags = $data['tags'];
        unset($data['tags']);
//       dd($data, $tags);
        $post = Post::create($data);
        $post->tags()->attach($tags);
        return redirect()->route('post.index');
    }

    public static function show(Post $post) {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post) {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Post $post) {
        $data = \request()->validate(['title' => 'string', 'content' => 'string', 'image' => 'string', 'likes' => 'integer', 'category_id' => '',   'tags'=>'']);
//        dd($data);
        $tags = $data['tags'];
        unset($data['tags']);
        $post->tags()->sync($tags);
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
//        dd($post);
    }

    public function firstOrCreate() {
//        dd('start');

        $post = Post::firstOrCreate(['title' => 'new 1', 'content' => 'some content 2'], ['title' => 'new 1', 'content' => 'some new content 2', 'image' => 'some title 1', 'likes' => 10000, 'is_published' => 0]);

//        dd('finished');
    }

    public function updateOrCreate() {
//        dd('start');

        $post = Post::updateOrCreate(['title' => '!!!some title 2'], ['title' => '!!!some title 2', 'content' => 'NEW', //            'image' => 'some title 1',
            'likes' => 10000, 'is_published' => 0]);

//        dd('finished');
    }

}
