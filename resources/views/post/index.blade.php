<x-layout title="Blog" titlePage="Blog">
    @if (session('success'))
        <div class="bg-green-50 px-3 py-2 text-green-500">
            {{ session('success') }}
        </div>
    @endif
    <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/blog/create" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create Now Post</a>
  </div><br>
@foreach ($posts as $post)
    <h1 class="text-3xl">{{ $post->title}}</h1>
    <p class="text-2xl">{{ $post->author }}</p>
    <p>{{ $post->body }}</p>
@endforeach
<br>
{{ $posts->links() }}
</x-layout>
