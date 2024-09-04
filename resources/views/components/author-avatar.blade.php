@props(['author', 'width' => 10])

<img src="{{ asset($author->avatar) }}" class="h-10 w-10 rounded-full bg-gray-50" width="{{ $width }}" alt="">
