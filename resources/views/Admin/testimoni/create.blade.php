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
                <h5 class="font-bold mb-4">Tambah Testimoni</h5>
                <form action="{{ route('admin.testimoni.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" name="nama" class="w-full px-3 py-2 border border-gray-300 rounded" value="{{ old('nama') }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Jabatan</label>
                        <input type="text" name="jabatan" class="w-full px-3 py-2 border border-gray-300 rounded" value="{{ old('jabatan') }}">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Pesan</label>
                        <textarea name="pesan" class="w-full px-3 py-2 border border-gray-300 rounded" rows="4" required>{{ old('pesan') }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Rating (1-5)</label>
                        <input type="number" min="1" max="5" name="rating" class="w-full px-3 py-2 border border-gray-300 rounded" value="{{ old('rating', 5) }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Foto (opsional)</label>
                        <input type="file" name="foto" class="w-full">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">YouTube URL (opsional)</label>
                        <input type="url" name="youtube_url" class="w-full px-3 py-2 border border-gray-300 rounded" value="{{ old('youtube_url') }}">
                        <p class="text-xs text-gray-500">Tautan video YouTube akan ditampilkan di bagian atas halaman testimoni.</p>
                    </div>
                    <button type="submit" class="btn-admin">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
