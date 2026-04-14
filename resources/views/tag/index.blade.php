<x-layout title="Tags" titlePage="Tags">
    <h2>Tags Page</h2>
@foreach ($tags as $tag)
    <h1>{{ $tag->title}}</h1>
@endforeach
</x-layout>
