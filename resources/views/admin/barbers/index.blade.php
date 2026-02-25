<x-app-layout>

<x-slot name="header">
    <div class="flex justify-between items-center py-4">
        <h2 class="text-2xl font-bold">
            Barber <span class="text-red-600">Management</span>
        </h2>

       <div x-data="{ openCreate: false }">

    <button @click="openCreate = true" 
            class="inline-flex items-center px-6 py-3 bg-red-600 hover:bg-red-700 text-white text-sm font-bold rounded-2xl transition-all duration-200 transform hover:scale-105 shadow-xl shadow-red-200 group">
        <svg class="w-5 h-5 mr-2 group-hover:rotate-90 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
        </svg>
        Tambah Barber
    </button>

    <div x-show="openCreate" 
         class="fixed inset-0 z-50 overflow-y-auto" 
         style="display: none;">
        <div class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm transition-opacity" @click="openCreate = false"></div>

        <div class="relative min-h-screen flex items-center justify-center p-4">
            <div class="relative bg-white rounded-[2rem] shadow-2xl max-w-lg w-full overflow-hidden transform transition-all"
                 @click.away="openCreate = false">
                <h3 class="text-2xl font-black text-slate-900 mb-6">Tambah Barber Baru</h3>
                    <form action="{{ route('barbers.store') }}" method="POST" enctype="multipart/form-data" class="p-8 text-left">
                    @csrf
                    <h3 class="text-2xl font-black text-slate-900 mb-6 tracking-tight">Tambah <span class="text-red-600">Barber Baru</span></h3>
                    
                    <div class="space-y-5">
                        {{-- INPUT NAMA --}}
                        <div>
                            <label class="block text-[11px] font-black text-slate-400 uppercase tracking-[0.2em] mb-2">Nama Lengkap</label>
                            <input type="text" name="name" placeholder="Masukkan nama barber..." required 
                                class="w-full bg-slate-50 border-none rounded-2xl focus:ring-2 focus:ring-red-500 font-bold p-4 text-slate-700 placeholder:font-normal placeholder:text-slate-300 transition-all">
                        </div>

                        {{-- INPUT DESKRIPSI --}}
                        <div>
                            <label class="block text-[11px] font-black text-slate-400 uppercase tracking-[0.2em] mb-2">Deskripsi / Spesialisasi</label>
                            <textarea name="specialist" rows="3" placeholder="Contoh: Ahli dalam teknik fade dan beard grooming..." required
                                class="w-full bg-slate-50 border-none rounded-2xl focus:ring-2 focus:ring-red-500 font-bold p-4 text-slate-700 placeholder:font-normal placeholder:text-slate-300 transition-all resize-none"></textarea>
                        </div>

                        {{-- INPUT PHOTO --}}
                        <div>
                            <label class="block text-[11px] font-black text-slate-400 uppercase tracking-[0.2em] mb-2">Photo Profil</label>
                            <div class="relative group">
                                <div class="flex items-center justify-center w-full px-6 py-8 border-2 border-dashed border-slate-200 rounded-2xl group-hover:border-red-400 transition-colors bg-slate-50">
                                    <div class="text-center">
                                        <svg class="mx-auto h-10 w-10 text-slate-400 group-hover:text-red-500 transition-colors mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <input type="file" name="photo" class="absolute inset-0 opacity-0 cursor-pointer" required>
                                        <p class="text-xs font-bold text-slate-500">Klik untuk pilih foto</p>
                                        <p class="text-[10px] text-slate-400 mt-1 uppercase font-black">PNG, JPG (Max. 2MB)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- ACTION BUTTONS --}}
                    <div class="mt-8 flex gap-3">
                        <button type="button" @click="openCreate = false" 
                            class="flex-1 px-6 py-4 bg-slate-100 text-slate-600 font-bold rounded-2xl hover:bg-slate-200 transition-colors active:scale-95">
                            Batal
                        </button>
                        <button type="submit" 
                            class="flex-1 px-6 py-4 bg-red-600 text-white font-bold rounded-2xl shadow-lg shadow-red-200 hover:bg-red-700 transition-all active:scale-95">
                            Simpan Data
                        </button>
                    </div>
                </form>
                    
            </div>
        </div>
    </div>
</div>
</x-slot>

<div class="max-w-6xl mx-auto p-6"
     x-data="{
        createModal:false,
        editModal:null,
        deleteModal:null,
        preview:null
     }">

    {{-- SUCCESS MESSAGE --}}
    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    {{-- TABLE --}}
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-4 text-left">Foto</th>
                    <th class="p-4 text-left">Nama</th>
                    <th class="p-4 text-left">Spesialis</th>
                    <th class="p-4 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($barbers as $barber)
                <tr class="border-t">
                    <td class="p-4">
                        <img src="{{ asset('images/'.$barber->photo) }}"
                             class="h-16 w-16 object-cover rounded">
                    </td>
                    <td class="p-4">{{ $barber->name }}</td>
                    <td class="p-4">{{ $barber->specialist }}</td>
                    <td class="p-4 text-right space-x-2">

                        <button @click="editModal = {{ $barber->id }}"
                            class="px-3 py-1 bg-yellow-500 text-white rounded">
                            Edit
                        </button>

                        <button @click="deleteModal = {{ $barber->id }}"
                            class="px-3 py-1 bg-red-600 text-white rounded">
                            Hapus
                        </button>
                    </td>
                </tr>

                {{-- EDIT MODAL --}}
                <div x-show="editModal === {{ $barber->id }}"
                     class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50"
                     x-cloak>

                    <div class="bg-white p-6 rounded-lg w-96">
                        <h3 class="font-bold mb-4">Edit Barber</h3>

                        <form action="{{ route('barbers.update', $barber->id) }}"
                              method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <input type="text"
                                   name="name"
                                   value="{{ $barber->name }}"
                                   class="w-full border p-2 mb-3 rounded"
                                   required>

                            <input type="text"
                                   name="specialist"
                                   value="{{ $barber->specialist }}"
                                   class="w-full border p-2 mb-3 rounded"
                                   required>

                            <input type="file"
                                   name="photo"
                                   class="w-full mb-3">

                            <div class="flex justify-between">
                                <button type="button"
                                        @click="editModal = null"
                                        class="px-4 py-2 bg-gray-300 rounded">
                                    Batal
                                </button>

                                <button type="submit"
                                        class="px-4 py-2 bg-yellow-500 text-white rounded">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- DELETE MODAL --}}
                <div x-show="deleteModal === {{ $barber->id }}"
                     class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50"
                     x-cloak>

                    <div class="bg-white p-6 rounded-lg w-80 text-center">
                        <h3 class="mb-4 font-bold">
                            Hapus {{ $barber->name }}?
                        </h3>

                        <form action="{{ route('barbers.destroy', $barber->id) }}"
                              method="POST">
                            @csrf
                            @method('DELETE')

                            <div class="flex justify-between">
                                <button type="button"
                                        @click="deleteModal = null"
                                        class="px-4 py-2 bg-gray-300 rounded">
                                    Batal
                                </button>

                                <button type="submit"
                                        class="px-4 py-2 bg-red-600 text-white rounded">
                                    Hapus
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                @empty
                <tr>
                    <td colspan="4" class="p-6 text-center">
                        Belum ada barber.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    

</div>

</x-app-layout>