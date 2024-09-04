<x-layout>
    <form method="POST" action="/posts/{{ $post->id }}" id="delete-form">
        <!-- cross site request forgery -->
        @csrf
        @method('DELETE')

        <div class="rounded-xl border border-black/10 bg-white">
            <div
                class="mx-auto grid max-w-xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-1 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
                <div>
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $post->title }}</h2>
                    <p class="mt-4 text-gray-500">{{ $post->description }}</p>

                    <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Manufacturer / Make</dt>
                            <dd class="mt-2 text-sm text-gray-500">{{ $post->manufacturer }}</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Car Price (if available)</dt>
                            <dd class="mt-2 text-sm text-gray-500">{{ $post->price }}</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Author Name / Pseudonym</dt>
                            <dd class="mt-2 text-sm text-gray-500">{{ $post->author->name }}</dd>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">Published Date</dt>
                            <dd class="mt-2 text-sm text-gray-500">{{ $post->created_at->format('F j, Y') }}</dd>
                        </div>
                    </dl>
                </div>

                <div class="mt-5 gap-4 sm:gap-6 lg:gap-8">
                    <img src="{{ asset($post->car_image) }}" class="h-48 w-96 rounded-xl object-fill" alt="image">
                </div>

                {{-- Can only delete post owned by the signed user --}}
                @can('delete', $post)
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <a href="/posts/{{ $post->id }}/edit" type="button"
                                class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                                Update Post
                            </a>
                        </div>
                        <div>
                            <x-forms.delete-button form="delete-form">Delete Post</x-forms.delete-button>
                        </div>
                    </div>
                @endcan

            </div>
        </div>
    </form>
</x-layout>
