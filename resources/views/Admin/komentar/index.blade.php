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
                <h5 class="font-bold">Komentar</h5>
            </div>
            <div class="p-4 overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-gray-200 text-gray-700">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">Nama</th>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">Email</th>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">Artikel</th>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">Pesan</th>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">Status</th>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($komentars as $komentar)
                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <h6 class="mb-0 text-sm leading-normal">{{ $komentar->name }}</h6>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-sm">{{ $komentar->email }}</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-sm">{{ $komentar->artikel->title }}</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <p class="mb-0 text-sm">{{ Str::limit($komentar->message, 100) }}</p>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <span class="px-2 py-1 text-xs rounded-full {{ $komentar->is_approved ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                    {{ $komentar->is_approved ? 'Disetujui' : 'Menunggu Persetujuan' }}
                                </span>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <form action="{{ route('admin.komentar.update', $komentar) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn-admin-secondary">
                                        {{ $komentar->is_approved ? 'Sembunyikan' : 'Setujui' }}
                                    </button>
                                </form>
                                <form action="{{ route('admin.komentar.destroy', $komentar) }}" method="POST" class="inline-block ml-2" onsubmit="return confirm('Yakin ingin dihapus?')">
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
