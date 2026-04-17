<x-layout title="Blog" titlePage="Blog">
    <h2><u>Blog Page:</u></h2><br>
@foreach ($posts as $post)
    <h1>{{ $post->title}}</h1>
    <p>{{ $post->body }}</p>
    <p>{{ $post->author }}</p>
@endforeach
<br>
{{ $posts->links() }}
</x-layout>
