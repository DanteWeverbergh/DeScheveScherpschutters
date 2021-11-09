<?php

namespace App\Http\Controllers\Nieuws;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\Post;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $posts = Post::latest()->paginate(4);
        return view('pages.nieuws.nieuws', compact('posts'), [
            'page' => Page::find(5),
            'categories' => Category::all()
        ]);
    }
}
