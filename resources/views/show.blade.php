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
        <form action="/posts/{{ $post->id }}" id="form_delete" method="post">
            @csrf
            {{ method_field('delete') }}
            <input type ="submit" style="display:none">
            <p class="delete"><span onclick="return deletePost(this);">Delete</span></p>
        </form>
        <div class="post">
            <h2 class="title">{{ $post->title }}</h2>
            <p class="body">{{ $post->body }}</p>
            <p class="updated_at">{{ $post->updated_at }}</p>
        </div>
        <div class="back"><a href="/">Back</a></div>
        <script>
            function deletePost(e){
                'use strict';
                if(confirm('本当に削除しますか？')){
                    document.getElementById('form_delete').submit();
                }
            }
        </script>
    </body>
</html>