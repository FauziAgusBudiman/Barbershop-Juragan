<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <h2 class="font-black text-2xl text-slate-800 leading-tight tracking-tighter">
                    {{ __('Admin Dashboard') }}
                </h2>
                <p class="text-sm text-slate-500 font-medium">Selamat datang kembali, {{ Auth::user()->name }}! 👋</p>
            </div>
            <div class="flex items-center gap-3">
                <a href="/" target="_blank" class="inline-flex items-center px-4 py-2 bg-white border border-slate-200 rounded-xl font-bold text-xs text-slate-700 uppercase tracking-widest shadow-sm hover:bg-slate-50 transition ease-in-out duration-150">
                    <svg class="w-4 h-4 me-2 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    Lihat Website
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-6 space-y-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-red-50 rounded-2xl">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 5.758L5 19m0-14l4.121 4.121"></path></svg>
                    </div>
                </div>
                <h4 class="text-slate-500 font-bold text-xs uppercase tracking-wider">Total Layanan</h4>
                <p class="text-2xl font-black text-slate-800">Aktif</p>
                <div class="mt-4 flex items-center text-xs font-bold text-red-600">
                    <a href="{{ route('services.index') }}" class="hover:underline">Kelola Layanan &rarr;</a>
                </div>
            </div>

            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-blue-50 rounded-2xl">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                </div>
                <h4 class="text-slate-500 font-bold text-xs uppercase tracking-wider">Tim Barber</h4>
                <p class="text-2xl font-black text-slate-800">Profesional</p>
                <div class="mt-4 flex items-center text-xs font-bold text-blue-600">
                    <a href="{{ route('barbers.index') }}" class="hover:underline">Lihat Team &rarr;</a>
                </div>
            </div>

            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-amber-50 rounded-2xl">
                        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                </div>
                <h4 class="text-slate-500 font-bold text-xs uppercase tracking-wider">Portofolio</h4>
                <p class="text-2xl font-black text-slate-800">Gaya Rambut</p>
                <div class="mt-4 flex items-center text-xs font-bold text-amber-600">
                    <a href="{{ route('gallery.index') }}" class="hover:underline">Update Foto &rarr;</a>
                </div>
            </div>

            <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-emerald-50 rounded-2xl">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                    </div>
                </div>
                <h4 class="text-slate-500 font-bold text-xs uppercase tracking-wider">Profil Toko</h4>
                <p class="text-2xl font-black text-slate-800">Informasi</p>
                <div class="mt-4 flex items-center text-xs font-bold text-emerald-600">
                    <a href="{{ route('about.index') }}" class="hover:underline">Edit Deskripsi &rarr;</a>
                </div>
            </div>
        </div>

        <div class="bg-slate-900 rounded-[2.5rem] p-8 md:p-12 overflow-hidden relative shadow-2xl">
            <div class="relative z-10 max-w-2xl">
                <span class="text-red-500 font-black uppercase tracking-[0.3em] text-xs">Management System</span>
                <h3 class="text-3xl md:text-4xl text-white font-black mt-4 leading-tight">
                    Kelola <span class="text-red-600 italic">Barber Juragan</span> Jadi Lebih Mudah.
                </h3>
                <p class="text-slate-400 mt-4 font-medium leading-relaxed">
                    Update harga layanan, tambah foto gaya rambut terbaru, atau kelola tim barber Anda hanya dari satu dashboard pusat. Perubahan yang Anda buat di sini akan langsung muncul di halaman utama website.
                </p>
            </div>
            
            <div class="absolute top-0 right-0 -translate-y-12 translate-x-12 w-64 h-64 bg-red-600/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 p-8 opacity-20 hidden lg:block">
                <svg class="w-48 h-48 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                </svg>
            </div>
        </div>
    </div>
</x-app-layout>