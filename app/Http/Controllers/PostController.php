<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
