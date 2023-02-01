<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
      return view('posts/index')->with(['posts' => $post->getPaginateByLimit(1)]);
    }

    
    public function show(Post $post)
{
    return view('posts/show')->with(['post' => $post]);
 //'post'はbladeファイルで使う変数。中身の$postはid=1のPostインスタンス。
}

public function create()
{
    return view('posts/create');
}

public function store(PostRequest $request, Post $post)
{
    $input = $request['post'];
    $post->fill($input)->save();
    return redirect('/posts/' . $post->id);
}


}
