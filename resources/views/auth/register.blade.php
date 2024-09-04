<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 lg:px-8">
        <div class="border border-black/5 px-10 py-3 sm:mx-auto sm:w-full sm:max-w-sm">
            <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
                <x-page-heading>Create a new account</x-page-heading>
            </div>

            <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
                <x-forms.input label="Username" name="username" />
                <x-forms.input label="Email address" name="email" type="email" />
                <x-forms.input label="Password" name="password" type="password" />
                <x-forms.input label="Password Confirmation" name="password_confirmation" type="password" />

                <x-forms.divider />

                <x-forms.input label="Author Name / Pseudonym" name="author" />
                <x-forms.input label="Your avatar" name="avatar" type="file" />

                <x-forms.button>Sign Up</x-forms.button>
            </x-forms.form>
        </div>
    </div>
</x-layout>
