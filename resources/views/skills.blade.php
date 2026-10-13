@extends('layouts.app')

@section('title', 'Skills — Nama Lo')

@section('content')

    <section class="mx-auto max-w-5xl px-4 py-16 sm:px-6 sm:py-20">
        <p class="text-sm font-medium text-violet-600">Skills</p>
        <h2 class="mt-2 text-2xl font-semibold text-gray-900 sm:text-3xl">Tools yang biasa saya pakai</h2>

        <div class="mt-10 space-y-8">
            @foreach ($skills as $category => $items)
                <div>
                    <p class="text-sm font-medium text-gray-500 mb-3">{{ $category ?? 'Lainnya' }}</p>
                    <ul class="flex flex-wrap gap-2">
                        @foreach ($items as $skill)
                            <li class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-700">
                                {{ $skill->name }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </section>

@endsection