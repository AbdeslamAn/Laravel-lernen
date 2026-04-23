<x-layout title="Blog" titlePage="Blog">
    <h2><u>Blog Page:</u></h2><br>
@foreach ($posts as $post)
    <h1 class="text-3xl">{{ $post->title}}</h1>
    <p class="text-2xl">{{ $post->author }}</p>
    <p>{{ $post->body }}</p>
@endforeach
<br>
{{ $posts->links() }}
</x-layout>
