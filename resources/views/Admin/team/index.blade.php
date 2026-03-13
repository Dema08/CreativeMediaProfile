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
                <h5 class="font-bold">Our Team</h5>
                <a href="{{ route('admin.team.create') }}" class="btn-admin">Tambah Team</a>
            </div>
            <div class="p-4 overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-gray-200 text-gray-700">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">Nama</th>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">Jabatan</th>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">History</th>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">Foto</th>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
        @foreach($teams as $team)
        <tr>
            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
              <div class="flex items-center px-2 py-1">
                <img src="{{ asset('storage/'.$team->foto) }}" class="h-9 w-9 rounded-full mr-3" alt="{{ $team->nama }}" />
                <div class="flex flex-col justify-center">
                  <h6 class="mb-0 text-sm leading-normal">{{ $team->nama }}</h6>
                  <p class="mb-0 text-xs leading-tight text-slate-400">{{ $team->jabatan }}</p>
                </div>
              </div>
            </td>
            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
              <span class="text-xs font-semibold leading-tight">{{ $team->jabatan }}</span>
            </td>
            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
              <span class="text-xs leading-tight text-slate-400">{{ Str::limit($team->history, 30) }}</span>
            </td>
            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
              <img src="{{ asset('storage/'.$team->foto) }}" class="h-12 w-12 rounded-xl" alt="{{ $team->nama }}" />
            </td>
            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
              <a href="{{ route('admin.team.edit', $team) }}" class="btn-admin-secondary">Edit</a>
              <form action="{{ route('admin.team.destroy', $team) }}" method="POST" class="inline-block ml-2" onsubmit="return confirm('Yakin ingin dihapus?')">
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
