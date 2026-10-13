<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-gray-900">

    <input type="checkbox" id="nav-toggle" class="peer sr-only">

    @php
        $navItems = [
            ['route' => 'home', 'label' => 'Home'],
            ['route' => 'projects', 'label' => 'Projects'],
            ['route' => 'skills', 'label' => 'Skills'],
            ['route' => 'experience', 'label' => 'Experience'],
            ['route' => 'contact', 'label' => 'Contact'],
        ];
    @endphp

    <header class="sticky top-0 z-40 border-b border-gray-100 bg-white/90 backdrop-blur">
        <div class="mx-auto flex h-16 max-w-5xl items-center justify-between px-4 sm:px-6">
            <a href="{{ route('home') }}" class="text-sm font-semibold tracking-tight text-gray-900">
                MyPortofolio
            </a>

            <nav class="hidden md:block">
                <ul class="flex items-center gap-8 text-sm text-gray-600">
                    @foreach ($navItems as $item)
                        <li>
                            <a href="{{ route($item['route']) }}"
                               class="transition hover:text-gray-900 {{ request()->routeIs($item['route']) ? 'text-violet-600 font-medium' : '' }}">
                                {{ $item['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>

            <div class="flex items-center gap-3">
                <a href="{{ route('contact') }}"
                   class="hidden rounded-md bg-violet-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-violet-700 sm:block">
                    Hubungi saya
                </a>

                <label for="nav-toggle" class="cursor-pointer rounded-md p-2 text-gray-600 transition hover:bg-gray-100 md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </label>
            </div>
        </div>

        <nav class="hidden border-t border-gray-100 bg-white peer-checked:block md:hidden">
            <ul class="space-y-1 px-4 py-4 text-sm">
                @foreach ($navItems as $item)
                    <li>
                        <a href="{{ route($item['route']) }}"
                           class="block rounded-lg px-3 py-2 {{ request()->routeIs($item['route']) ? 'bg-violet-50 text-violet-600 font-medium' : 'text-gray-600 hover:bg-gray-50' }}">
                            {{ $item['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="border-t border-gray-100">
        <div class="mx-auto flex max-w-5xl flex-col items-center gap-4 px-4 py-8 sm:flex-row sm:justify-between sm:px-6">
            <p class="text-sm text-gray-500">&copy; {{ date('Y') }} Nama Lo.</p>
            <ul class="flex items-center gap-5">
                <li><a href="https://github.com/username" class="text-sm text-gray-500 transition hover:text-gray-900">GitHub</a></li>
                <li><a href="https://instagram.com/username" class="text-sm text-gray-500 transition hover:text-gray-900">Instagram</a></li>
                <li><a href="https://linkedin.com/in/username" class="text-sm text-gray-500 transition hover:text-gray-900">LinkedIn</a></li>
            </ul>
        </div>
    </footer>

</body>
</html>