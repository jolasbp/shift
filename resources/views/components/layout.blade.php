<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Shift</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap"
            rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="pb-20 font-lato">
        <div class="px-10">
            <nav class="flex items-center justify-between py-4">
                <div>
                    <a href="/">
                        <h1 class="text-4xl font-bold">SHIFT</h1>
                </div>

                {{-- You can only create post if signed-in --}}
                @auth
                    <div class="flex space-x-6">
                        <a href="/posts/create" class="font-bold">Create a Post </a>
                        <a>|</a>

                        <form method="POST" action="/logout">
                            @csrf
                            @method('DELETE')

                            <button>Log Out</button>
                        </form>
                    </div>
                @endauth

                {{-- Guest user --}}
                @guest
                    <div class="space-x-6">
                        <a href="/login">Login</a>
                        <a>|</a>
                        <a href="/register">Sign Up</a>
                    </div>
                @endguest
            </nav>
            <main class="max-2-[980px] mx-auto mt-10">
                {{ $slot }}
            </main>
        </div>

    </body>

</html>
