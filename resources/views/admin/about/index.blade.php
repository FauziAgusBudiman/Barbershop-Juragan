<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-3">
            <div class="p-2 bg-blue-600 rounded-lg shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <h2 class="font-bold text-2xl text-gray-800 tracking-tight">
                About Management
            </h2>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-50/50 min-h-screen">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            {{-- SUCCESS ALERT --}}
            @if(session('success'))
                <div x-data="{ show: true }" 
                     x-show="show" 
                     x-transition:leave="transition ease-in duration-300"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0"
                     class="mb-6 flex items-center justify-between p-4 rounded-2xl bg-emerald-50 text-emerald-700 border border-emerald-100 shadow-sm">
                    <div class="flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                        <span class="font-medium">{{ session('success') }}</span>
                    </div>
                    <button @click="show = false" class="text-emerald-500 hover:text-emerald-700 uppercase text-xs font-bold">Dismiss</button>
                </div>
            @endif

            <div class="bg-white shadow-xl shadow-gray-200/50 rounded-3xl overflow-hidden border border-gray-100">
                
                {{-- HEADER CARD --}}
                <div class="px-8 py-6 border-b border-gray-50 bg-gradient-to-r from-white to-gray-50/50">
                    <h3 class="text-lg font-bold text-gray-800 flex items-center gap-2">
                        <span class="w-2 h-6 bg-blue-600 rounded-full"></span>
                        Informasi Barbershop
                    </h3>
                </div>

                <div class="p-8">
                    {{-- ================== JIKA BELUM ADA DATA ================== --}}
                    @if(!$about)
                    <div x-data="{ open: false }" class="text-center py-12">
                        <div class="w-20 h-20 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Belum Ada Deskripsi</h3>
                        <p class="text-gray-500 mt-2 max-w-sm mx-auto">
                            Tarik perhatian pelanggan dengan menceritakan sejarah atau keunggulan barbershop Anda.
                        </p>

                        <button @click="open = true"
                            class="mt-8 inline-flex items-center gap-2 bg-gray-900 hover:bg-blue-600 text-white px-8 py-3 rounded-xl font-semibold shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                            </svg>
                            Mulai Tulis Deskripsi
                        </button>

                        {{-- MODAL CREATE (REUSABLE) --}}
                        <div x-show="open" 
                             class="fixed inset-0 z-[60] overflow-y-auto" 
                             style="display: none;">
                            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                                <div x-show="open" x-transition.opacity class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm transition-opacity"></div>
                                
                                <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>

                                <div x-show="open" 
                                     x-transition:enter="transition ease-out duration-300"
                                     x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                     x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                     @click.away="open = false"
                                     class="inline-block align-bottom bg-white rounded-3xl text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-xl sm:w-full p-8">
                                    
                                    <h2 class="text-2xl font-bold text-gray-900 mb-2">Buat About</h2>
                                    <p class="text-gray-500 mb-6 text-sm">Tuliskan cerita menarik tentang bisnis Anda.</p>

                                    <form action="{{ route('about.store') }}" method="POST">
                                        @csrf
                                        <textarea name="content" rows="8"
                                            class="w-full border-gray-200 rounded-2xl p-4 focus:ring-4 focus:ring-blue-500/10 focus:border-blue-500 transition-all resize-none bg-gray-50"
                                            placeholder="Barbershop kami berdiri sejak..." required></textarea>

                                        <div class="flex justify-end gap-3 mt-8">
                                            <button type="button" @click="open = false" class="px-6 py-2.5 rounded-xl text-gray-600 font-semibold hover:bg-gray-100 transition">Batal</button>
                                            <button type="submit" class="px-8 py-2.5 rounded-xl bg-blue-600 text-white font-semibold shadow-md hover:bg-blue-700 transition">Simpan Data</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- ================== JIKA SUDAH ADA DATA ================== --}}
                    @else
                    <div x-data="{ open: false }">
                        <div class="relative group">
                            <div class="absolute -inset-1 bg-gradient-to-r from-blue-100 to-indigo-100 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                            <div class="relative bg-white border border-gray-100 rounded-2xl p-8 leading-relaxed text-gray-600 text-lg shadow-sm">
                                <div class="prose prose-blue max-w-none">
                                    {!! nl2br(e($about->content)) !!}
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 flex justify-end">
                            <button @click="open = true"
                                class="flex items-center gap-2 bg-amber-500 hover:bg-amber-600 text-white px-6 py-2.5 rounded-xl font-bold shadow-lg shadow-amber-200 transition-all active:scale-95">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                </svg>
                                Perbarui Konten
                            </button>
                        </div>

                        {{-- MODAL EDIT --}}
                        <div x-show="open" class="fixed inset-0 z-[60] overflow-y-auto" style="display: none;">
                            <div class="flex items-center justify-center min-h-screen px-4">
                                <div x-show="open" x-transition.opacity class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm"></div>
                                
                                <div x-show="open" 
                                     x-transition:enter="transition ease-out duration-300"
                                     x-transition:enter-start="opacity-0 scale-95"
                                     x-transition:enter-end="opacity-100 scale-100"
                                     @click.away="open = false"
                                     class="relative bg-white w-full max-w-xl rounded-3xl shadow-2xl p-8">
                                    
                                    <div class="mb-6">
                                        <h2 class="text-2xl font-bold text-gray-800">Edit Deskripsi</h2>
                                        <p class="text-gray-500 text-sm">Pastikan informasi tetap relevan bagi pelanggan.</p>
                                    </div>

                                    <form action="{{ route('about.update', $about->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <textarea name="content" rows="8"
                                            class="w-full border-gray-200 rounded-2xl p-4 focus:ring-4 focus:ring-amber-500/10 focus:border-amber-500 transition-all resize-none bg-gray-50 text-gray-700"
                                            required>{{ $about->content }}</textarea>

                                        <div class="flex justify-end gap-3 mt-8">
                                            <button type="button" @click="open = false" class="px-6 py-2.5 rounded-xl text-gray-500 font-semibold hover:bg-gray-100 transition">Batal</button>
                                            <button type="submit" class="px-8 py-2.5 rounded-xl bg-amber-500 text-white font-bold shadow-lg shadow-amber-200 hover:bg-amber-600 transition">Simpan Perubahan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            {{-- FOOTER INFO --}}
            <p class="mt-6 text-center text-gray-400 text-sm">
                Terakhir diperbarui: {{ $about ? $about->updated_at->diffForHumans() : 'Belum ada data' }}
            </p>
        </div>
    </div>
</x-app-layout>