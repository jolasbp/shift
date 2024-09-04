<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 lg:px-8">
        <div class="border border-black/5 px-10 py-3 sm:mx-auto sm:w-full sm:max-w-sm">
            <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
                <x-page-heading>What's on your mind?</x-page-heading>
            </div>
            <x-forms.form method="POST" action="/posts" enctype="multipart/form-data">
                <x-forms.input label="Title" name="title" placeholder="New Civic Type R" />
                <x-forms.input label="Car Manufacturer" name="manufacturer" placeholder="Honda Motor Company" />
                <x-forms.textarea label="Description" name="description"></x-forms.textarea>
                <x-forms.input label="Car Price" name="price" placeholder="$10,000 or N/A (if not available)" />
                <x-forms.input label="Car Image" name="car_image" type="file" />
                <x-forms.input label="Tags (comma separated)" name="tags" placeholder="honda, civic, jdm" />
                <x-forms.checkbox label="Featured this car?" name="featured" />

                <x-forms.button>Publish Post</x-forms.button>
            </x-forms.form>
        </div>
    </div>
</x-layout>
