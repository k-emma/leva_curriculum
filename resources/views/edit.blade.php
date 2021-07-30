<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog edit</title>
        <link href="https://fonts.googleapis,com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">Edit view</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="content__itle">
                <h2>Title</h2>
                <input type='text' name='post[title]' placeholder="タイトル" value="{{ $post->title }}"/>
            </div>
            <div class="content_body">
                <h2>Main text</h2>
                <textarea type='text' name='post[body]' placeholder="なんかいろいろ">{{ $post->body }}</textarea>
            </div>
            <input type="submit" value="update">
        </form>
        <div class="back"><a href="/posts/{{ $post->id }}">back</a></div>
    </body>
</html>