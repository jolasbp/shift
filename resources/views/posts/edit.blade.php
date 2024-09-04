<x-layout>
    <form method="POST" action="/posts/{{ $post->id }}" id="edit-form" enctype="multipart/form-data">
        <!-- cross site request forgery -->
        @csrf
        @method('PATCH')
        <div class="rounded-xl border border-black/10 bg-white">
            <div
                class="mx-auto grid max-w-xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-1 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
                <div>
                    <dl class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                        <div class="pt-4">
                            <dt class="font-medium text-gray-900">Author Name / Pseudonym</dt>
                            <dd class="mt-2 text-base font-bold text-gray-500">{{ $post->author->name }}</dd>
                        </div>
                        <div class="pt-4">
                            <dt class="font-medium text-gray-900">Published Date</dt>
                            <dd class="mt-2 text-base font-bold text-gray-500">{{ $post->created_at->format('F j, Y') }}
                            </dd>
                        </div>
                    </dl>

                    <div class="mt-10">
                        <div>
                            <x-forms.input label="Title" name="title" placeholder="New Civic Type R"
                                value="{{ $post->title }}" />
                        </div>

                        <div class="mt-7">
                            <x-forms.textarea label="Description" name="description">
                                {{ $post->description }}</x-forms.textarea>
                        </div>
                    </div>

                    <dl class="mt-10 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">
                                <x-forms.input label="Car Manufacturer" name="manufacturer"
                                    value="{{ $post->manufacturer }}" />
                            </dt>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <dt class="font-medium text-gray-900">
                                <x-forms.input label="Car Price (if available)" name="price"
                                    value="{{ $post->price }}" />
                            </dt>
                        </div>
                    </dl>
                </div>

                <div class="mt-5 gap-4 sm:gap-6 lg:gap-8">
                    <img src="{{ asset($post->car_image) }}" class="h-72 w-96 rounded-lg bg-gray-100" alt="image">
                    <div class="mt-16">
                        <x-forms.input label="Car Image" name="car_image" type="file" />
                    </div>
                </div>

                {{-- Can only edit post owned by the signed user --}}
                @can('edit', $post)
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <x-forms.button form="edit-form">Save changes</x-forms.button>
                        </div>
                        <div>
                            <a href="/posts/{{ $post->id }}" type="button"
                                class="flex w-full justify-center rounded-md bg-red-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
                                Cancel
                            </a>
                        </div>
                    </div>
                @endcan

            </div>
        </div>
    </form>
</x-layout>
