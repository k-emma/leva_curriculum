<!DOCTYPE html>
<html lang="{{ str_replace("_","-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewreport" content="width=device-width, initial-scale=1">
        <title>Blog Posts</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <p class="edit"><a href="/posts/{{ $post->id }}/edit">Edit</p>
        <div class="post">
            <h2 class="title">{{ $post->title }}</h2>
            <p class="body">{{ $post->body }}</p>
            <p class="updated_at">{{ $post->updated_at }}</p>
        </div>
        <div class="back"><a href="/">Back</a></div>
    </body>
</html>