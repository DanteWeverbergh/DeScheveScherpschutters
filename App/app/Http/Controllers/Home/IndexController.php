<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Post;
use App\Models\Sponsor;
use Illuminate\Http\Request;

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

        $posts = Post::latest()->paginate(3);
        return view('pages.home',compact('posts'),[
            'page' => Page::find(1),
            'sponsors' => Sponsor::all(),
           // 'post' => Post::find(22),
           // 'post2' => Post::find(4),
           // 'post3' => Post::find(3)

            ]);

    }
}




