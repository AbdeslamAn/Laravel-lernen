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
  <div class="flex justify-between items-center border border-gray-200 px-4 py-6 my-2">
    <div>
        <h1 class="text-3xl">{{ $post->title}}</h1>
        <p class="text-2xl">{{ $post->author }}</p>
    </div>
    <div>
        <a class="text-yellow-500 hover:text-gray-500" href="/blog/{{ $post->id }}/edit">Edit</a>
        <button class="text-red-500 hover:text-gray-500">Delete</button>
    </div>
  </div>
@endforeach
<br>
{{ $posts->links() }}
</x-layout>
