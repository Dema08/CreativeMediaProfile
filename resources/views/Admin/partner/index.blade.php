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
                <h5 class="font-bold">Our Partner</h5>
                <a href="{{ route('admin.partner.create') }}" class="btn-admin">Tambah Partner</a>
            </div>
            <div class="p-4 overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-gray-200 text-gray-700">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">Nama Perusahaan</th>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">Logo</th>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
        @foreach($partners as $partner)
        <tr>
            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
              <h6 class="mb-0 text-sm leading-normal">{{ $partner->nama_perusahaan }}</h6>
            </td>
            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
              <img src="{{ asset('storage/'.$partner->logo) }}" class="h-12 w-12 rounded-xl" alt="{{ $partner->nama_perusahaan }}" />
            </td>
            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
              <a href="{{ route('admin.partner.edit', $partner) }}" class="btn-admin-secondary">Edit</a>
              <form action="{{ route('admin.partner.destroy', $partner) }}" method="POST" class="inline-block ml-2" onsubmit="return confirm('Yakin ingin dihapus?')">
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
