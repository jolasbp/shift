<x-layout>
    <div class="flex min-h-full flex-col justify-center px-6 lg:px-8">
        <div class="border border-black/5 px-10 py-3 sm:mx-auto sm:w-full sm:max-w-sm">
            <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
                <x-page-heading>Login your account</x-page-heading>
            </div>
            <x-forms.form method="POST" action="/login">
                <x-forms.input label="Username" name="username" />
                <x-forms.input label="Password" name="password" type="password" />

                <x-forms.button>Login</x-forms.button>
            </x-forms.form>
        </div>
    </div>
</x-layout>
