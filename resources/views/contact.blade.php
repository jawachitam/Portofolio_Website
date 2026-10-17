@extends('layouts.app')

@section('title', 'Contact — Nama Lo')

@section('content')

    <section class="mx-auto max-w-5xl px-4 py-16 sm:px-6 sm:py-20">
        <div class="rounded-2xl bg-gray-900 px-6 py-12 text-center sm:px-12 sm:py-16">
            <h2 class="text-2xl font-semibold text-white sm:text-3xl">Ngobrol-ngobrol?</h2>
            <p class="mx-auto mt-3 max-w-md text-gray-400">
                Terbuka buat kolaborasi, project freelance, atau sekadar diskusi soal web development.
            </p>

            <div class="mt-8 flex items-center justify-center gap-5">

                <a href="https://wa.me/6281387294705" target="_blank"
                   class="flex size-12 items-center justify-center rounded-full bg-white/10 text-white transition hover:bg-white/20">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2 22l5.25-1.38c1.45.79 3.08 1.21 4.79 1.21 5.46 0 9.91-4.45 9.91-9.91S17.5 2 12.04 2zm5.8 14.1c-.24.68-1.4 1.3-1.93 1.38-.49.08-1.11.11-1.79-.11-.41-.13-.94-.3-1.62-.59-2.84-1.23-4.7-4.1-4.84-4.29-.14-.19-1.15-1.53-1.15-2.92s.72-2.07.98-2.35c.26-.28.56-.35.75-.35.19 0 .37 0 .54.01.17.01.41-.07.64.49.24.57.81 1.98.88 2.12.07.14.12.3.02.49-.1.19-.15.3-.29.46-.14.17-.3.37-.43.5-.14.14-.29.29-.12.57.17.28.76 1.25 1.63 2.03 1.12 1 2.06 1.31 2.34 1.46.28.14.44.12.6-.07.17-.19.72-.84.91-1.13.19-.28.38-.24.64-.14.26.09 1.67.79 1.95.93.28.14.47.21.54.33.07.12.07.68-.17 1.36z"/>
                    </svg>
                </a>

               <a href="mailto:raihanibrahim552@gmail.com"
                    onclick="if (window.matchMedia('(pointer: fine)').matches) { window.open('https://mail.google.com/mail/?view=cm&fs=1&to=raihanibrahim552@gmail.com&su=Halo%20Raihan', '_blank'); return false; }"
                    class="flex size-12 items-center justify-center rounded-full bg-white/10 text-white transition hover:bg-white/20">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0-.414.336-.75.75-.75h18a.75.75 0 0 1 .75.75v10.5a.75.75 0 0 1-.75.75H3a.75.75 0 0 1-.75-.75V6.75Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 7 9.19 6.13a1.5 1.5 0 0 0 1.62 0L22.25 7" />
                    </svg>
                </a>

                <a href="https://instagram.com/_gxgca" target="_blank"
                   class="flex size-12 items-center justify-center rounded-full bg-white/10 text-white transition hover:bg-white/20">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path d="M12 2.16c3.2 0 3.58.01 4.85.07 1.17.05 1.8.25 2.23.41.56.22.96.48 1.38.9.42.42.68.82.9 1.38.16.42.36 1.06.41 2.23.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.25 1.8-.41 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.42.16-1.06.36-2.23.41-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.8-.25-2.23-.41-.56-.22-.96-.48-1.38-.9-.42-.42-.68-.82-.9-1.38-.16-.42-.36-1.06-.41-2.23-.06-1.27-.07-1.65-.07-4.85s.01-3.58.07-4.85c.05-1.17.25-1.8.41-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.42-.16 1.06-.36 2.23-.41 1.27-.06 1.65-.07 4.85-.07zM12 0C8.74 0 8.33.01 7.05.07 5.78.13 4.9.33 4.14.63c-.79.31-1.46.72-2.13 1.38C1.35 2.68.94 3.35.63 4.14.33 4.9.13 5.78.07 7.05.01 8.33 0 8.74 0 12s.01 3.67.07 4.95c.06 1.27.26 2.15.56 2.91.31.79.72 1.46 1.38 2.13.66.66 1.34 1.07 2.13 1.38.76.3 1.64.5 2.91.56C8.33 23.99 8.74 24 12 24s3.67-.01 4.95-.07c1.27-.06 2.15-.26 2.91-.56.79-.31 1.46-.72 2.13-1.38.66-.66 1.07-1.34 1.38-2.13.3-.76.5-1.64.56-2.91.06-1.28.07-1.69.07-4.95s-.01-3.67-.07-4.95c-.06-1.27-.26-2.15-.56-2.91-.31-.79-.72-1.46-1.38-2.13C21.32 1.35 20.65.94 19.86.63c-.76-.3-1.64-.5-2.91-.56C15.67.01 15.26 0 12 0zm0 5.84a6.16 6.16 0 1 0 0 12.32 6.16 6.16 0 0 0 0-12.32zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.4-11.85a1.44 1.44 0 1 0 0 2.88 1.44 1.44 0 0 0 0-2.88z"/>
                    </svg>
                </a>

                <a href="https://www.linkedin.com/in/ahmad-raihan-b82002435" target="_blank"
                   class="flex size-12 items-center justify-center rounded-full bg-white/10 text-white transition hover:bg-white/20">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path d="M20.45 20.45h-3.56v-5.57c0-1.33-.02-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.34V9h3.41v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.45v6.29zM5.34 7.43a2.07 2.07 0 1 1 0-4.13 2.07 2.07 0 0 1 0 4.13zM7.12 20.45H3.56V9h3.56v11.45z"/>
                    </svg>
                </a>

            </div>
        </div>
    </section>

@endsection