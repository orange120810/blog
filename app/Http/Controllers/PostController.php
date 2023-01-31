<?php
//コメント

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
      return view('posts/index')->with(['posts' => $post->getPaginateByLimit(1)]);
    }
}
