@props(['post'])

<li class="flex justify-between gap-x-6 py-5">
    <div class="flex min-w-0 items-center gap-x-4">
        <a href="/posts/{{ $post->id }}">
            <img src="{{ asset($post->car_image) }}" class="w-20 rounded-xl object-fill" alt="image">
        </a>
        <div class="min-w-0 flex-auto">
            <a href="/posts/{{ $post->id }}">
                <p class="text-base font-semibold leading-6 text-gray-900">{{ $post->title }}</p>
                <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $post->description }}</p>
        </div>
        </a>
    </div>
    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
        <a href="/posts/{{ $post->id }}">
            <p class="text-sm leading-6 text-gray-900">{{ $post->author->name }}</p>
            <p class="mt-1 text-xs leading-5 text-gray-500">Posted
                <time datetime="2023-01-23T13:23Z">{{ $post->created_at->format('F j, Y') }}</time>
            </p>
        </a>
    </div>
</li>
