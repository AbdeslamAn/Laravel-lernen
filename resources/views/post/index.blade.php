<x-layout title="Blog" titlePage="Blog">
    <h2>Blog Page</h2>
@foreach ($posts as $post)
    <h1>{{ $post->title}}</h1>
    <p>{{ $post->body }}</p>
    <p>{{ $post->author }}</p>
@endforeach
</x-layout>
