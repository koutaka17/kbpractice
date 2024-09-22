<!DOCTYPE html>
<html lang="{{ str_replace('_','_',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <!-- Fonts -->
    <linlk href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Blog Name</h1>
    <div class='posts'>
        @foreach($posts as $post)
        <div class='post'>
            <h2 class='title'>
            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            </h2>
            <p class='body'>{{ $post->body }}</p>
        </div>
        @endforeach
     </div>
     <div class ='paginate'>
        {{ $posts->links() }}
</div>
   </body>
 </html>