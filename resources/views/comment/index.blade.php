<x-layout title="Commment" titlePage="Comment">
    @if (session('success'))
        <div class="bg-green-50 px-3 py-2 text-green-500">
            {{ session('success') }}
        </div>
    @endif
<div class="relative overflow-x-auto bg-gray-50 shadow-sm rounded-lg border border-gray-200">
    <table class="w-full text-sm text-left rtl:text-right text-body">
        <thead class="bg-gray-100 border-b border-gray-200">
            <tr>
                <th scope="col" class="px-6 py-3 font-medium">
                    Title
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Author
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Comment
                </th>
            </tr>
        </thead>
        @foreach ($comments as $comment)
        <tbody>
            <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap underline text-indigo-700">
                    <a href="/blog/{{ $comment->post->id }}"> <p>{{ $comment->post->title}}</p></a>
                </th>
                <td class="px-6 py-4">
                     {{ $comment->author}}
                </td>
                <td class="px-6 py-4">
                     <p>{{ $comment->content }}</p>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
<br>
    {{ $comments->links() }}
</x-layout>
