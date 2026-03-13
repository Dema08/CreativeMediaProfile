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
                <h5 class="font-bold mb-4">Edit Video Testimoni</h5>
                <form action="{{ route('admin.youtube-video.update', $youtubeVideo) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Judul</label>
                        <input type="text" name="judul" class="w-full px-3 py-2 border border-gray-300 rounded" value="{{ old('judul', $youtubeVideo->judul) }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">URL YouTube</label>
                        <input type="url" name="youtube_url" class="w-full px-3 py-2 border border-gray-300 rounded" value="{{ old('youtube_url', $youtubeVideo->youtube_url) }}" required>
                        <p class="text-xs text-gray-500">Contoh: https://www.youtube.com/watch?v=abc123</p>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Deskripsi (opsional)</label>
                        <textarea name="deskripsi" class="w-full px-3 py-2 border border-gray-300 rounded" rows="4">{{ old('deskripsi', $youtubeVideo->deskripsi) }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Urutan</label>
                        <input type="number" name="urutan" class="w-full px-3 py-2 border border-gray-300 rounded" value="{{ old('urutan', $youtubeVideo->urutan) }}">
                    </div>
                    <button type="submit" class="btn-admin">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
