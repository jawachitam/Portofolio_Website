@extends('layouts.app')

@section('title', 'Experience — Nama Lo')

@section('content')

    <section class="mx-auto max-w-5xl px-4 py-16 sm:px-6 sm:py-20">
        <p class="text-sm font-medium text-violet-600">Experience</p>
        <h2 class="mt-2 text-2xl font-semibold text-gray-900 sm:text-3xl">Lomba, kepanitiaan & organisasi</h2>

        <div class="mt-6 flex flex-wrap gap-2">
            <a href="{{ route('experience') }}"
               class="rounded-full px-4 py-1.5 text-sm font-medium {{ !$category ? 'bg-violet-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                Semua
            </a>
            @foreach ($categories as $cat)
                <a href="{{ route('experience', ['category' => $cat]) }}"
                   class="rounded-full px-4 py-1.5 text-sm font-medium {{ $category === $cat ? 'bg-violet-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                    {{ $cat }}
                </a>
            @endforeach
        </div>

        <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @forelse ($experiences as $exp)
                <a href="{{ $exp->link ?? '#' }}" target="{{ $exp->link ? '_blank' : '_self' }}"
                   class="group block overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition hover:shadow-md">
                    <div class="aspect-4/3 w-full overflow-hidden bg-gray-100">
                        @if ($exp->image)
                            <img src="{{ asset($exp->image) }}" alt="{{ $exp->title }}"
                                 class="h-full w-full object-cover transition group-hover:scale-105">
                        @else
                            <div class="flex h-full w-full items-center justify-center text-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" class="size-10">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M3 17.25V6.75A2.25 2.25 0 015.25 4.5h13.5A2.25 2.25 0 0121 6.75v10.5A2.25 2.25 0 0118.75 19.5H5.25A2.25 2.25 0 013 17.25z" />
                                </svg>
                            </div>
                        @endif
                    </div>
                    <div class="p-5">
                        <p class="text-xs font-medium tracking-wide text-gray-500 uppercase">
                            {{ $exp->category }} @if ($exp->year) &middot; {{ $exp->year }} @endif
                        </p>
                        <h3 class="mt-2 text-lg font-semibold text-gray-900">{{ $exp->title }}</h3>
                        @if ($exp->organization)
                            <p class="text-sm text-violet-600 mt-1">{{ $exp->organization }}</p>
                        @endif
                        <p class="mt-2 text-sm text-gray-600 line-clamp-2">{{ $exp->description }}</p>
                    </div>
                </a>
            @empty
                <p class="text-gray-400">Belum ada data experience.</p>
            @endforelse
        </div>
    </section>

@endsection