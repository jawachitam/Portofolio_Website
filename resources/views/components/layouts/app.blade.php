<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Porto') | Nama Lo</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">

    <nav class="bg-white shadow p-4 flex justify-center gap-6">
        <a href="{{ route('home') }}" class="hover:text-blue-600">Home</a>
        <a href="{{ route('skills') }}" class="hover:text-blue-600">Skills</a>
        <a href="{{ route('experience') }}" class="hover:text-blue-600">Experience</a>
        <a href="{{ route('contact') }}" class="hover:text-blue-600">Contact</a>
    </nav>

    <main class="max-w-4xl mx-auto px-4 py-10">
        @yield('content')
    </main>

    <footer class="text-center text-sm text-gray-500 py-6">
        &copy; {{ date('Y') }} Nama Lo. All rights reserved.
    </footer>

</body>
</html>