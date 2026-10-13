@extends('layouts.app')

@section('title', 'Projects — Nama Lo')

@section('content')

    <section class="mx-auto max-w-5xl px-4 py-16 sm:px-6 sm:py-20">
        <p class="text-sm font-medium text-violet-600">Projects</p>
        <h2 class="mt-2 text-2xl font-semibold text-gray-900 sm:text-3xl">Karya yang pernah saya buat</h2>

        <div class="mt-6 flex flex-wrap gap-2">
            <a href="{{ route('projects') }}"
               class="rounded-full px-4 py-1.5 text-sm font-medium {{ !$category ? 'bg-violet-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                Semua
            </a>
            @foreach ($categories as $cat)
                <a href="{{ route('projects', ['category' => $cat]) }}"
                   class="rounded-full px-4 py-1.5 text-sm font-medium {{ $category === $cat ? 'bg-violet-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                    {{ $cat }}
                </a>
            @endforeach
        </div>

        <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @forelse ($projects as $project)
                <a href="{{ $project->link ?? '#' }}" target="{{ $project->link ? '_blank' : '_self' }}"
                   class="group block overflow-hidden rounded-lg border border-gray-100 bg-white shadow-sm transition hover:shadow-md">
                    <div class="aspect-4/3 w-full overflow-hidden bg-gray-100">
                        @if ($project->image)
                            <img src="{{ asset($project->image) }}" alt="{{ $project->title }}"
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
                            {{ $project->category }}
                            @if ($project->date)
                                &middot; {{ \Carbon\Carbon::parse($project->date)->translatedFormat('M Y') }}
                            @endif
                        </p>
                        <h3 class="mt-2 text-lg font-semibold text-gray-900">{{ $project->title }}</h3>
                        <p class="mt-2 text-sm text-gray-600 line-clamp-2">{{ $project->description }}</p>
                    </div>
                </a>
            @empty
                <p class="text-gray-400">Belum ada project di kategori ini.</p>
            @endforelse
        </div>
    </section>

@endsection