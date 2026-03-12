@extends('admin.layout.main')

@section('content')
@if(session('success'))
    <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
        {{ session('success') }}
    </div>
@endif

<div class="flex flex-wrap -mx-3">
    <div class="w-full px-3">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl">
            <div class="p-4">
                <h5 class="font-bold mb-4">Tambah Hero Image</h5>
                <form action="{{ route('admin.hero.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Judul</label>
                        <input type="text" name="judul" class="w-full px-3 py-2 border border-gray-300 rounded" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Gambar</label>
                        <input type="file" name="gambar" class="w-full" required>
                    </div>
                    <button type="submit" class="inline-block px-6 py-3 bg-gradient-to-tl from-purple-700 to-pink-500 text-white font-semibold text-xs leading-tight uppercase rounded shadow-md hover:shadow-lg focus:outline-none transition duration-150">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
