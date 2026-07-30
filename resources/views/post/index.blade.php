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
        <a class="rounded-md bg-yellow-300 px-2.5 py-1.5 text-sm font-semibold hover:bg-gray-950/10" href="/blog/{{ $post->id }}/edit">Edit</a>

        <button data-id="{{ $post->id }}" data-title="{{ $post->title }}" command="show-modal" commandfor="dialog" class="delete-btn rounded-md bg-red-300 px-2.5 py-1.5 text-sm font-semibold text-gray-900 hover:bg-gray-950/10">Delete</button>
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
