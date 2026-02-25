<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Barber Juragan') }} - Dashboard</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@300;400;600;800&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body {
                font-family: 'Geologica', sans-serif;
                background-color: #f8fafc; /* Slate 50 */
            }

            /* Custom Scrollbar untuk area Admin */
            ::-webkit-scrollbar { width: 5px; }
            ::-webkit-scrollbar-track { background: #f1f1f1; }
            ::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
            ::-webkit-scrollbar-thumb:hover { background: #cbd5e1; }

            /* Efek Glassmorphism untuk Header */
            .glass-header {
                background: rgba(255, 255, 255, 0.8);
                backdrop-filter: blur(12px);
                -webkit-backdrop-filter: blur(12px);
                border-bottom: 1px solid rgba(226, 232, 240, 0.8);
            }

            [x-cloak] { display: none !important; }
        </style>
    </head>
    <body class="antialiased text-slate-900">
        <div class="min-h-screen">
            <div class="sticky top-0 z-40">
                @include('layouts.navigation')
            </div>

            @isset($header)
                <header class="glass-header sticky top-[65px] z-30 transition-all duration-300">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <div class="flex items-center justify-between">
                            {{-- Slot untuk Judul --}}
                            <div class="text-slate-800">
                                {{ $header }}
                            </div>
                            
                            {{-- Penanda waktu akses (Optional) --}}
                            <div class="hidden md:block">
                                <span class="text-[10px] font-black uppercase tracking-widest text-slate-400 bg-slate-100 px-3 py-1 rounded-full border border-slate-200">
                                    Admin Panel v2.0
                                </span>
                            </div>
                        </div>
                    </div>
                </header>
            @endisset

            <main class="py-10">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    {{-- Animasi Fade In sederhana untuk setiap konten yang masuk --}}
                    <div x-data="{ loaded: false }" 
                         x-init="setTimeout(() => loaded = true, 100)"
                         x-show="loaded"
                         x-transition:enter="transition ease-out duration-500"
                         x-transition:enter-start="opacity-0 translate-y-4"
                         x-transition:enter-end="opacity-100 translate-y-0"
                         x-cloak>
                        
                        {{ $slot }}
                        
                    </div>
                </div>
            </main>

            <footer class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="border-t border-slate-200 pt-6 flex flex-col md:flex-row justify-between items-center gap-4">
                    <p class="text-sm text-slate-500 font-medium">
                        &copy; {{ date('Y') }} <span class="text-red-600 font-bold">Barber Juragan</span>. All rights reserved.
                    </p>
                    <div class="flex gap-6">
                        <span class="flex items-center text-[11px] font-bold text-slate-400 uppercase tracking-tighter">
                            <span class="h-2 w-2 rounded-full bg-green-500 mr-2"></span> System Online
                        </span>
                    </div>
                </div>
            </footer>
        </div>

        {{-- Toast Notification (Optional - Jika menggunakan Session Flash) --}}
        @if (session()->has('success'))
            <div x-data="{ show: true }" 
                 x-init="setTimeout(() => show = false, 4000)" 
                 x-show="show"
                 class="fixed bottom-5 right-5 z-50 bg-slate-900 text-white px-6 py-4 rounded-2xl shadow-2xl flex items-center gap-3 border border-slate-700"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="translate-y-20 opacity-0"
                 x-transition:enter-end="translate-y-0 opacity-100"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="translate-y-0 opacity-100"
                 x-transition:leave-end="translate-y-20 opacity-0">
                <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                <p class="text-sm font-bold">{{ session('success') }}</p>
            </div>
        @endif
    </body>
</html>