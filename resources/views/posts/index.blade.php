<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
            @foreach($posts as $post)
            <div class='post'>
                <h2 class='title'><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
            </div>
            @endforeach
        </div>
        <a href='/posts/create'>create</a>
        <div class 'pagination'>{{ $posts->links()}}</div>
    </body>
</html>