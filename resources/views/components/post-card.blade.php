@props(['post'])

<div class="gap-8 rounded-xl border border-transparent bg-black/5 p-4 lg:grid-cols-3">
    <article class="flex max-w-xl flex-col justify-between">

        {{-- Post Details --}}
        <div class="group relative">
            <h3 class="mt-1 text-lg font-bold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="/posts/{{ $post->id }}">
                    <span class="absolute inset-0"></span>
                    {{ $post->title }}
                </a>
            </h3>

            <p class="text-l mt-1">{{ $post->price }}</p>

            <div class="mt-3 flex items-center justify-center">
                <img src="{{ asset($post->car_image) }}" class="h-48 w-96 rounded-xl object-fill" alt="image">
            </div>

            <p class="mt-5 line-clamp-3 text-justify text-sm leading-6 text-gray-600">{{ $post->description }}.</p>
        </div>

        {{-- Author Details --}}
        <div class="relative mt-8 flex items-center gap-x-4">
            <x-author-avatar :author="$post->author"></x-author-avatar>
            <div class="text-sm leading-6">
                <p class="font-semibold text-gray-900">
                    <a href="/posts/{{ $post->id }}">
                        <span class="absolute inset-0"></span>
                        {{ $post->author->name }}
                    </a>
                </p>
                <time datetime="2020-03-16" class="text-gray-500">{{ $post->created_at->format('F j, Y') }}</time>
            </div>
        </div>

        {{-- Tags related to post --}}
        <div class="mt-2 flex items-end justify-end gap-x-4 text-xs">
            @foreach ($post->tags as $tag)
                <x-tag :$tag />
            @endforeach
        </div>

    </article>
</div>
