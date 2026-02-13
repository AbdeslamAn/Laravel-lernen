<x-layout title="{{$post->title}}" titlePage="{{$post->title}}">
    <h1>{{ $post->title}}</h1>
    <p>{{ $post->body }}</p>
    <p>{{ $post->author }}</p>
</x-layout>
