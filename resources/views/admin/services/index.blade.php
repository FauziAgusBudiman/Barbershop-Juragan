<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Service Management
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-lg rounded-2xl p-8">

                {{-- SUCCESS ALERT --}}
                @if(session('success'))
                    <div class="mb-6 p-4 rounded-lg bg-green-100 text-green-700 border border-green-200">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- HEADER + BUTTON --}}
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-semibold text-gray-700">
                        Daftar Layanan
                    </h3>

                    <!-- BUTTON TAMBAH -->
                    <div x-data="{ openCreate: false }">
                        <button 
                            @click="openCreate = true"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-xl shadow transition">
                            + Tambah Service
                        </button>

                        <!-- MODAL CREATE -->
                        <div x-show="openCreate"
                             class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">

                            <div @click.away="openCreate = false"
                                 class="bg-white w-full max-w-lg rounded-2xl shadow-2xl p-8">

                                <h2 class="text-2xl font-semibold mb-6">Tambah Service</h2>

                                <form action="{{ route('services.store') }}" method="POST">
                                    @csrf

                                    <div class="mb-4">
                                        <label class="block mb-2">Nama</label>
                                        <input type="text" name="name"
                                            class="w-full border rounded-xl p-3"
                                            required>
                                    </div>

                                    <div class="mb-4">
                                        <label class="block mb-2">Deskripsi</label>
                                        <textarea name="description"
                                            class="w-full border rounded-xl p-3"
                                            rows="3" required></textarea>
                                    </div>

                                    <div class="mb-4">
                                        <label class="block mb-2">Harga</label>
                                        <input type="number" name="price"
                                            class="w-full border rounded-xl p-3"
                                            required>
                                    </div>

                                    <div class="flex justify-end gap-4">
                                        <button type="button"
                                            @click="openCreate = false"
                                            class="px-4 py-2 bg-gray-300 rounded-xl">
                                            Batal
                                        </button>

                                        <button type="submit"
                                            class="px-5 py-2 bg-blue-600 text-white rounded-xl">
                                            Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- TABLE --}}
                <div class="overflow-x-auto">
                    <table class="min-w-full border border-gray-200 rounded-xl overflow-hidden">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-6 py-3 text-left">No</th>
                                <th class="px-6 py-3 text-left">Nama</th>
                                <th class="px-6 py-3 text-left">Deskripsi</th>
                                <th class="px-6 py-3 text-left">Harga</th>
                                <th class="px-6 py-3 text-left">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">

                            @foreach($services as $key => $service)
                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-4">{{ $key+1 }}</td>

                                <td class="px-6 py-4 font-semibold">
                                    {{ $service->name }}
                                </td>

                                <td class="px-6 py-4">
                                    {{ $service->description }}
                                </td>

                                <td class="px-6 py-4 text-green-600 font-semibold">
                                    Rp {{ number_format($service->price,0,',','.') }}
                                </td>

                                <td class="px-6 py-4 space-x-2">

                                    {{-- EDIT --}}
                                    <div x-data="{ openEdit: false }" class="inline-block">
                                        <button @click="openEdit = true"
                                            class="bg-yellow-500 text-white px-3 py-1 rounded-lg">
                                            Edit
                                        </button>

                                        <div x-show="openEdit"
                                             class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">

                                            <div @click.away="openEdit = false"
                                                 class="bg-white w-full max-w-lg rounded-2xl shadow-2xl p-8">

                                                <h2 class="text-2xl font-semibold mb-6">Edit Service</h2>

                                                <form action="{{ route('services.update',$service->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="mb-4">
                                                        <label class="block mb-2">Nama</label>
                                                        <input type="text" name="name"
                                                            value="{{ $service->name }}"
                                                            class="w-full border rounded-xl p-3"
                                                            required>
                                                    </div>

                                                    <div class="mb-4">
                                                        <label class="block mb-2">Deskripsi</label>
                                                        <textarea name="description"
                                                            class="w-full border rounded-xl p-3"
                                                            rows="3" required>{{ $service->description }}</textarea>
                                                    </div>

                                                    <div class="mb-4">
                                                        <label class="block mb-2">Harga</label>
                                                        <input type="number" name="price"
                                                            value="{{ $service->price }}"
                                                            class="w-full border rounded-xl p-3"
                                                            required>
                                                    </div>

                                                    <div class="flex justify-end gap-4">
                                                        <button type="button"
                                                            @click="openEdit = false"
                                                            class="px-4 py-2 bg-gray-300 rounded-xl">
                                                            Batal
                                                        </button>

                                                        <button type="submit"
                                                            class="px-5 py-2 bg-yellow-500 text-white rounded-xl">
                                                            Update
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- DELETE --}}
                                    <div x-data="{ openDelete: false }" class="inline-block">
                                        <button @click="openDelete = true"
                                            class="bg-red-600 text-white px-3 py-1 rounded-lg">
                                            Hapus
                                        </button>

                                        <div x-show="openDelete"
                                             class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">

                                            <div @click.away="openDelete = false"
                                                 class="bg-white w-full max-w-md rounded-2xl shadow-2xl p-8">

                                                <h2 class="text-xl font-semibold mb-4 text-red-600">
                                                    Hapus Service?
                                                </h2>

                                                <p class="mb-6">
                                                    Yakin ingin menghapus <strong>{{ $service->name }}</strong>?
                                                </p>

                                                <form action="{{ route('services.destroy',$service->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <div class="flex justify-end gap-4">
                                                        <button type="button"
                                                            @click="openDelete = false"
                                                            class="px-4 py-2 bg-gray-300 rounded-xl">
                                                            Batal
                                                        </button>

                                                        <button type="submit"
                                                            class="px-5 py-2 bg-red-600 text-white rounded-xl">
                                                            Hapus
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>