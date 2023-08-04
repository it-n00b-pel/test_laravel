<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class IndexController extends BaseController {
    //
    public function __invoke() {

        $posts = Post::paginate(10);
//        dd($posts);
        return view('post.index', compact('posts'));
    }

}
