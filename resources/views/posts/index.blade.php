<x-layout>
    <div class="space-y-10">
        <section class="pt-2 text-center">
            <h1 class="text-5xl font-bold">Latest trends under the hood.</h1>
            <h4 class="mt-1 text-xl">This is where you can find and share everything about cars.</h1>

                {{-- Search feature --}}
                <x-forms.form action="/search" class="mt-6">
                    <x-forms.input :label="false" name="search"
                        class="border-black-100 mt-8 w-full max-w-2xl rounded-xl border bg-white px-5 py-4"
                        placeholder="What car are you looking for?" />
                </x-forms.form>

        </section>

        <section class="pt-10">
            <x-section-heading>FEATURED CARS</x-section-heading>

            <div class="mt-6 grid gap-8 lg:grid-cols-3">
                @foreach ($featuredCar as $post)
                    <x-post-card :$post />
                @endforeach
            </div>
        </section>

        <section class="pt-10">
            <x-section-heading>RECENT CAR ARTICLES</x-section-heading>

            <div class="mt-6">
                <ul role="list" class="divide-y divide-gray-100">
                    @foreach ($posts as $post)
                        <x-post-list :$post></x-post-list>
                    @endforeach
                </ul>
            </div>
        </section>

        <section>
            <h1 class="mt-20 text-center">
                <strong class="text-xl">Disclaimer</strong>
                <p> All information and images used in this website are for
                    demo
                    purposes only.
                </p>
            </h1>
        </section>
    </div>
</x-layout>
