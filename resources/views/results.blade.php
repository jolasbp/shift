<x-layout>
    <x-page-heading>Results</x-page-heading>

    {{-- Results in search query --}}
    <div class="mt-6 grid gap-8 lg:grid-cols-3">
        @foreach ($posts as $post)
            <x-post-card :$post />
        @endforeach

</x-layout>
