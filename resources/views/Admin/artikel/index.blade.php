@extends('admin.layout.main')

@section('content')
@if(session('success'))
    <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
        {{ session('success') }}
    </div>
@endif

<div class="flex flex-wrap -mx-3 mb-4">
    <div class="w-full px-3">
        <div class="relative flex flex-col min-w-0 mb-4 break-words bg-white shadow-soft-xl rounded-2xl">
            <div class="p-4 flex justify-between items-center">
                <h5 class="font-bold">Artikel</h5>
                <a href="{{ route('admin.artikel.create') }}" class="btn-admin">Tambah Artikel</a>
            </div>
            <div class="p-4 overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-gray-200 text-gray-700">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">Judul</th>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">Penulis</th>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">Tanggal</th>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">Status</th>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($artikels as $artikel)
                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <h6 class="mb-0 text-sm leading-normal">{{ $artikel->title }}</h6>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-sm">{{ $artikel->author }}</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-sm">{{ $artikel->published_at ? $artikel->published_at->format('d M Y') : 'Belum diatur' }}</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <span class="px-2 py-1 text-xs rounded-full {{ $artikel->is_published ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                    {{ $artikel->is_published ? 'Diterbitkan' : 'Draf' }}
                                </span>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <a href="{{ route('admin.artikel.show', $artikel) }}" class="btn-admin-secondary">Detail</a>
                                <a href="{{ route('admin.artikel.edit', $artikel) }}" class="btn-admin-secondary ml-2">Edit</a>
                                <form action="{{ route('admin.artikel.destroy', $artikel) }}" method="POST" class="inline-block ml-2" onsubmit="return confirm('Yakin ingin dihapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-admin-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
