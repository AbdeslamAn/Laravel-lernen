<x-layout title="Commment" titlePage="Comment">
    <h2>Comments Page</h2>
@foreach ($comments as $post)
    <h1>{{ $comment->author}}</h1>
    <p>{{ $comment->content }}</p>
    <p>{{ $comment->post}}</p>
@endforeach
</x-layout>
