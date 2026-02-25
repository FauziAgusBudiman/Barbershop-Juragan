<x-app-layout>

<div class="py-12 bg-slate-50"
     x-data="{
        createModal:false,
        editModal:null,
        deleteModal:null,
        preview:null
     }">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- HEADER --}}
        <div class="text-center mb-12">
            <h2 class="text-4xl font-extrabold text-slate-900">
                Gallery <span class="text-red-600">Management</span>
            </h2>

            <button @click="createModal = true"
                class="mt-6 px-6 py-3 bg-red-600 text-white rounded-xl shadow-lg hover:bg-red-700 transition">
                + Tambah Gallery
            </button>
        </div>

        {{-- SUCCESS --}}
        @if(session('success'))
            <div class="mb-8 p-4 bg-green-100 text-green-700 rounded-xl shadow">
                {{ session('success') }}
            </div>
        @endif

        {{-- ================== TABLE DATA ================== --}}
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-16">
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-left">
                    <thead class="bg-slate-100 text-slate-600 uppercase text-xs tracking-wider">
                        <tr>
                            <th class="px-6 py-4">No</th>
                            <th class="px-6 py-4">Foto</th>
                            <th class="px-6 py-4">Judul</th>
                            <th class="px-6 py-4 text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200">

                        @forelse($galleries as $gallery)
                        <tr class="hover:bg-slate-50 transition">

                            <td class="px-6 py-4">
                                {{ $loop->iteration }}
                            </td>

                            <td class="px-6 py-4">
                                <img src="{{ asset('images/'.$gallery->image) }}"
                                     class="h-14 w-14 object-cover rounded-lg shadow">
                            </td>

                            <td class="px-6 py-4 font-semibold text-slate-800">
                                {{ $gallery->title }}
                            </td>

                            <td class="px-6 py-4 text-right space-x-2">

                                <button @click="editModal = {{ $gallery->id }}"
                                    class="px-3 py-1 bg-yellow-500 text-white rounded-lg text-xs hover:bg-yellow-600 transition">
                                    Edit
                                </button>

                                <button @click="deleteModal = {{ $gallery->id }}"
                                    class="px-3 py-1 bg-red-600 text-white rounded-lg text-xs hover:bg-red-700 transition">
                                    Hapus
                                </button>

                            </td>

                        </tr>

                        {{-- ================== EDIT MODAL ================== --}}
                        <div x-show="editModal === {{ $gallery->id }}"
                             class="fixed inset-0 flex items-center justify-center bg-black/70 z-50"
                             x-cloak>

                            <div class="bg-white p-8 rounded-2xl w-full max-w-md shadow-2xl">

                                <h3 class="font-bold text-xl mb-6">Edit Gallery</h3>

                                <form action="{{ route('gallery.update',$gallery->id) }}"
                                      method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <input type="text"
                                           name="title"
                                           value="{{ $gallery->title }}"
                                           class="w-full border rounded-lg p-3 mb-4"
                                           required>

                                    <input type="file"
                                           name="photo"
                                           class="w-full mb-4">

                                    <div class="flex justify-between">
                                        <button type="button"
                                                @click="editModal = null"
                                                class="px-4 py-2 bg-gray-300 rounded-lg">
                                            Batal
                                        </button>

                                        <button type="submit"
                                                class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">
                                            Update
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>

                        {{-- ================== DELETE MODAL ================== --}}
                        <div x-show="deleteModal === {{ $gallery->id }}"
                             class="fixed inset-0 flex items-center justify-center bg-black/70 z-50"
                             x-cloak>

                            <div class="bg-white p-8 rounded-2xl w-full max-w-sm text-center shadow-2xl">

                                <h3 class="font-bold text-xl mb-4">
                                    Hapus "{{ $gallery->title }}" ?
                                </h3>

                                <form action="{{ route('gallery.destroy',$gallery->id) }}"
                                      method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <div class="flex justify-between mt-6">
                                        <button type="button"
                                                @click="deleteModal = null"
                                                class="px-4 py-2 bg-gray-300 rounded-lg">
                                            Batal
                                        </button>

                                        <button type="submit"
                                                class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                                            Hapus
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>

                        @empty
                        <tr>
                            <td colspan="4" class="px-6 py-8 text-center text-slate-400">
                                Data gallery belum tersedia.
                            </td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>

    </div>

    {{-- ================== CREATE MODAL ================== --}}
    <div x-show="createModal"
         class="fixed inset-0 flex items-center justify-center bg-black/70 z-50"
         x-cloak>

        <div class="bg-white p-8 rounded-2xl w-full max-w-md shadow-2xl">

            <h3 class="font-bold text-xl mb-6">Tambah Gallery</h3>

            <form action="{{ route('gallery.store') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf

                <input type="text"
                       name="title"
                       placeholder="Judul Gallery"
                       class="w-full border rounded-lg p-3 mb-4"
                       required>

                {{-- Preview --}}
                <template x-if="preview">
                    <img :src="preview"
                         class="h-32 w-full object-cover rounded mb-4">
                </template>

                <input type="file"
                       name="image"
                       accept="image/*"
                       class="w-full mb-4"
                       @change="preview = URL.createObjectURL($event.target.files[0])"
                       required>

                <div class="flex justify-between">
                    <button type="button"
                            @click="createModal = false"
                            class="px-4 py-2 bg-gray-300 rounded-lg">
                        Batal
                    </button>

                    <button type="submit"
                            class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                        Simpan
                    </button>
                </div>
            </form>

        </div>
    </div>

</div>

<style>
[x-cloak] { display:none !important; }
</style>

</x-app-layout>