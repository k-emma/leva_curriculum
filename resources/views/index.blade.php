<!DOCTYPE html>
<html lang="{{ str_replace('_', '-' , app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <p class='create'><a href="/posts/create">blog posting</a></p>
        <div class='posts'>
            @foreach ($posts as $post)
            <div class='post'>
                <h2><a href='/posts/{{ $post->id }}'>{{ $post->title }}</a>
                <p class='body'>{{ $post->body }}</p>
            </div>
            @endforeach
        </div>
    </body>
</html>