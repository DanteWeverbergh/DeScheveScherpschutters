<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CreateArticleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.createarticle', [
            'categories' => Category::all(),
            'posts' => Post::all()
        ]);
    }

    public function new(Post $post, Request $request)
    {
        $new = new Post();




        if($request->hasFile('photo')){
            $size = $request->file('photo')->getSize();
            $name = $request->file('photo')->getClientOriginalName();

            $request->file('photo')->storeAs('public/images/', $name);

            $new->name = $name;
            $new->size = $size;
        }

        $new->title = $request->title;
        $new->slug = Str::slug($request->title);
        $new->excerpt = $request->excerpt;
        $new->article = $request->article;






        $new->save();

        return redirect('/dashboard');
    }

    public function Editview($id)
    {
        return view('dashboard.editarticle', [
            'post' => Post::find($id)
        ]);
    }

    public function Edit($id, Request $request, Post $post)
    {
       $post = Post::find($id);

       if($request->hasFile('photo')){
        $size = $request->file('photo')->getSize();
        $name = $request->file('photo')->getClientOriginalName();

        $request->file('photo')->storeAs('public/images/', $name);

        $post->name = $name;
        $post->size = $size;
    };

       $post->title = $request->title;
       $post->slug = Str::slug($request->title);
       $post->excerpt = $request->excerpt;
       $post->article = $request->article;

       $post->save();

       return redirect('/dashboard');
    }

    public function Delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/dashboard');
    }
}
