<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class IndexController extends BaseController {
    //
    public function __invoke(FilterRequest $request) {

//        $posts = Post::paginate(10);
        $data = $request->validated();
        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)->paginate(10);
        //   return $posts;
//       dd($posts);
        return view('post.index', compact('posts'));
    }

}
