<x-layout title="Blog" titlePage="Blog">
    @if (session('success'))
        <div class="bg-green-50 px-3 py-2 text-green-500">
            {{ session('success') }}
        </div>
    @endif
    <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/blog/create" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create Now Post</a>
    </div><br>
  {{-- Form to show Post --}}
  @foreach ($posts as $post)
<div class="max-w-xl mx-auto bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden my-4">
  <!-- Post Header -->
<div class="flex items-center justify-between p-4 pb-2">
    <div class="flex items-center space-x-3">
      <img class="w-10 h-10 rounded-full object-cover" src="https://placeholder.com" alt="User avatar">
      <div>
        <h4 class="font-semibold text-gray-900 text-sm">{{ $post->author }}</h4>
        <span class="text-xs text-gray-500">{{ $post->created_at->format('M j, Y') }} &bull; <i class="fas fa-globe-americas"></i></span>
      </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
<el-dropdown class="inline-block">
  <button class="inline-flex text-gray-500 hover:bg-gray-100 p-2 rounded-full transition">

    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="w-5 h-5">
      <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" clip-rule="evenodd" fill-rule="evenodd" />
    </svg>
  </button>
  <el-menu anchor="bottom end" popover class="w-30 origin-top-right rounded-md bg-white shadow-lg outline-1 outline-black/5 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
    <div class="py-1">
      <a href="/blog/{{ $post->id }}/edit" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:text-gray-900 focus:outline-hidden">Edit</a>
      <button data-id="{{ $post->id }}" data-title="{{ $post->title }}" command="show-modal" commandfor="dialog" class="delete-btn block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:text-gray-900 focus:outline-hidden">Delete</button>
    </div>
  </el-menu>
</el-dropdown>

  </div>

  <!-- Post Title  -->
  <div class="px-4 text-sm text-gray-800 pb-3">
    <a href="/blog/{{ $post->id }}">{{ $post->title}}</a>
  </div>

  <!-- Post Content -->
  <div class="min-h-32 flex justify-center items-center bg-gray-100 text-center px-4">
    {{ $post->body }}
  </div>

  <!-- Reactions / Stats Count -->
  <div class="flex items-center justify-between px-4 py-2 text-xs text-gray-500 border-b border-gray-100">
    <div class="flex items-center space-x-1">
      <span class="bg-blue-500 text-white p-1 rounded-full text-[10px]">👍</span>
      <span>142</span>
    </div>
    <div class="space-x-2">
      <span>18 comments</span>
      <span>4 shares</span>
    </div>
  </div>

  <!-- Action Buttons (Like, Comment, Share) -->
  <div class="flex items-center justify-between px-2 py-1 text-gray-600 font-medium text-sm">
    <button class="flex-1 flex items-center justify-center space-x-2 py-2 hover:bg-gray-100 rounded-lg transition">
      <span>👍</span>
      <span class="text-xs">Like</span>
    </button>
    <button class="flex-1 flex items-center justify-center space-x-2 py-2 hover:bg-gray-100 rounded-lg transition">
      <span>💬</span>
      <span class="text-xs">Comment</span>
    </button>
    <button class="flex-1 flex items-center justify-center space-x-2 py-2 hover:bg-gray-100 rounded-lg transition">
      <span>↗️</span>
      <span class="text-xs">Share</span>
    </button>
  </div>
</div>
@endforeach
<br>
{{ $posts->links() }}

{{-- Model confirm before delete post --}}
<el-dialog>
  <dialog id="dialog" aria-labelledby="dialog-title" class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
    <el-dialog-backdrop class="fixed inset-0 bg-gray-500/75 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

    <div tabindex="0" class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
      <el-dialog-panel class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div class="sm:flex sm:items-start">
            <div class="mx-auto flex size-12 shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:size-10">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 text-red-600">
                <path d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </div>
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
              <h3 id="dialog-title" class="text-base font-semibold text-gray-900">Delete Confirmation</h3>
              <div class="mt-2">
                <p class="text-sm text-gray-500">Are you sure you want to delete the post <span id="post-title" class="font-semibold text-red-400 underline"></span>? This action cannot be undone.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
            {{-- Form for Delete Post --}}
            <form method="POST" id="delete-form">
                @csrf
                @method('DELETE')
                <button type="submit" class= "inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 sm:ml-3 sm:w-auto">Delete</button>
            </form>

            <button type="button" command="close" commandfor="dialog" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
        </div>
      </el-dialog-panel>
    </div>
  </dialog>
</el-dialog>

<script>
const buttons = document.querySelectorAll('.delete-btn');

const title = document.getElementById('post-title');
const form = document.getElementById('delete-form');

buttons.forEach(button => {

    button.addEventListener('click', () => {

        title.textContent = button.dataset.title;

        form.action = `/blog/${button.dataset.id}`;

    });

});
</script>

</x-layout>
