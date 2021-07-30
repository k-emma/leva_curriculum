<!DOCTYPE html>
<html lang="{{ str_replace("_","-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewreport" content="width=device-width, initial-scale=1">
        <title>Blog Posts</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="post">
            <p class="body">{{ $post->body }}</p>
            <p class="updated_at">{{ $post->updated_at }}</p>
        </div>
        <div class="footer">
            <a href="/">Back</a>
        </div>
    </body>
</html>