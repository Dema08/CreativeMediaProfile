@extends('admin.layout.main')

@section('content')

<div class="flex flex-wrap -mx-3">
<div class="w-full px-3">

<div class="bg-white shadow-soft-xl rounded-2xl p-6">

<h5 class="font-bold text-lg mb-6">Detail Artikel</h5>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

<!-- Gambar -->
<div class="md:col-span-1">
    @if($artikel->image)
        <img src="{{ asset('storage/'.$artikel->image) }}"
             class="w-full rounded-lg shadow border"
             alt="{{ $artikel->title }}">
    @else
        <div class="w-full h-64 bg-gray-200 rounded-lg flex items-center justify-center">
            <span class="text-gray-500">Tidak ada gambar</span>
        </div>
    @endif
</div>

<!-- Informasi Artikel -->
<div class="md:col-span-1 space-y-4">
    <div>
        <h6 class="font-semibold text-gray-600">Judul</h6>
        <p class="text-lg">{{ $artikel->title }}</p>
    </div>

    <div>
        <h6 class="font-semibold text-gray-600">Penulis</h6>
        <p>{{ $artikel->author }}</p>
    </div>

    <div>
        <h6 class="font-semibold text-gray-600">Tanggal Publikasi</h6>
        <p>{{ $artikel->published_at ? $artikel->published_at->format('d M Y') : 'Belum diatur' }}</p>
    </div>

    <div>
        <h6 class="font-semibold text-gray-600">Status</h6>
        <span class="px-2 py-1 text-xs rounded-full {{ $artikel->is_published ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
            {{ $artikel->is_published ? 'Diterbitkan' : 'Draf' }}
        </span>
    </div>

    <div>
        <h6 class="font-semibold text-gray-600">Ringkasan</h6>
        <p class="text-sm text-gray-700">{{ $artikel->excerpt }}</p>
    </div>

    <div>
        <h6 class="font-semibold text-gray-600">Konten</h6>
        <div class="text-sm text-gray-700 leading-relaxed">
            {!! nl2br(e($artikel->content)) !!}
        </div>
    </div>
</div>

</div>

<div class="mt-6 flex gap-3">
    <a href="{{ route('admin.artikel.edit', $artikel) }}"
       class="btn-admin-secondary">Edit</a>

    <a href="{{ route('admin.artikel.index') }}"
       class="btn-admin">Kembali</a>
</div>

</div>

</div>
</div>

@endsection
