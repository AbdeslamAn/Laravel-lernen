<x-layout title="Commment" titlePage="Comment">
    <h2>Comments Page</h2>
@foreach ($comments as $comment)
    <h1>{{ $comment->author}}</h1>
    <p>{{ $comment->content }}</p>
    <a href="/blog/{{ $comment->post->id }}"> <p>{{ $comment->post->title}}</p></a>
@endforeach
<br>
    {{ $comments->links() }}
</x-layout>
