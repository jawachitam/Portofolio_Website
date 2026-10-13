@extends('layouts.app')

@section('title', 'Home — Nama Lo')

@section('content')

    <section class="relative overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/masre.jpeg') }}')"></div>
        <div class="absolute inset-0 bg-gray-900/70"></div>

        <div class="relative mx-auto max-w-5xl px-4 pt-16 pb-20 sm:px-6 sm:pt-20">
            <span class="inline-flex items-center gap-2 rounded-full border border-white/30 py-1 pr-3 pl-2 text-xs font-medium text-white">
                <span class="relative flex size-2">
                    <span class="absolute inline-flex size-full animate-ping rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex size-2 rounded-full bg-emerald-500"></span>
                </span>
                Terbuka untuk project freelance
            </span>

            <h1 class="mt-6 max-w-2xl text-4xl font-semibold tracking-tight text-white sm:text-5xl">
                Halo, saya Ahmad Raihan
            </h1>

            <p class="mt-5 max-w-xl text-lg text-gray-200">
                Mahasiswa Sistem Informasi di Telkom University. Saya tertarik dengan
                web development, terutama di bidang front-end development.
            </p>

            <div class="mt-8 flex flex-wrap items-center gap-4">
                <a href="{{ route('contact') }}" class="rounded-md bg-violet-600 px-6 py-3 text-sm font-medium text-white transition hover:bg-violet-700">
                    Hubungi saya
                </a>
                <a href="{{ route('skills') }}" class="inline-flex items-center gap-1 text-sm font-medium text-white transition hover:text-gray-200">
                    Lihat skill
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class="border-t border-gray-100 bg-gray-50">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 sm:py-20">
            <div class="max-w-lg">
                <p class="text-sm font-medium text-violet-600">Highlight</p>
                <h2 class="mt-2 text-2xl font-semibold text-gray-900 sm:text-3xl">Project & pencapaian pilihan</h2>
            </div>

            <div class="mt-12 space-y-8">
                @forelse ($highlights as $item)
                    <article class="rounded-lg border border-gray-100 bg-white p-6 shadow-sm">
                        <p class="text-xs font-medium tracking-wide text-gray-500 uppercase">
                            {{ $item->category }}
                            @if ($item->date)
                                &middot; {{ \Carbon\Carbon::parse($item->date)->translatedFormat('Y') }}
                            @endif
                        </p>
                        <h3 class="mt-2 text-xl font-semibold text-gray-900">{{ $item->title }}</h3>
                        <p class="mt-3 text-gray-600">{{ $item->description }}</p>
                        @if ($item->link)
                            <a href="{{ $item->link }}" target="_blank" class="mt-4 inline-flex items-center gap-1 text-sm font-medium text-violet-600 transition hover:text-violet-700">
                                Lihat selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        @endif
                    </article>
                @empty
                    <p class="text-gray-400">Belum ada highlight.</p>
                @endforelse
            </div>
        </div>
    </section>

@endsection