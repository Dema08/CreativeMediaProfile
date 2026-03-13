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
                <h5 class="font-bold">Testimoni</h5>
                <a href="{{ route('admin.testimoni.create') }}" class="btn-admin">Tambah Testimoni</a>
            </div>
            <div class="p-4 overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-gray-200 text-gray-700">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">Nama</th>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">Jabatan</th>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">Pesan</th>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">Rating</th>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">YouTube</th>
                            <th class="px-6 py-3 text-left uppercase font-semibold text-xs">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($testimonials as $testimonial)
                        <tr>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <div class="flex items-center px-2 py-1">
                                    @if($testimonial->foto)
                                        <img src="{{ asset('storage/'.$testimonial->foto) }}" class="h-9 w-9 rounded-full mr-3" alt="{{ $testimonial->nama }}" />
                                    @else
                                        <div class="h-9 w-9 rounded-full mr-3 bg-gray-200"></div>
                                    @endif
                                    <div class="flex flex-col justify-center">
                                        <h6 class="mb-0 text-sm leading-normal">{{ $testimonial->nama }}</h6>
                                        <p class="mb-0 text-xs leading-tight text-slate-400">{{ $testimonial->jabatan }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <span class="text-xs font-semibold leading-tight">{{ $testimonial->jabatan }}</span>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <span class="text-xs leading-tight text-slate-400">{{ \Illuminate\Support\Str::limit($testimonial->pesan, 60) }}</span>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <span class="text-xs font-semibold leading-tight">{{ $testimonial->rating }}/5</span>
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                @if($testimonial->youtube_url)
                                    <a href="{{ $testimonial->youtube_url }}" target="_blank" class="text-xs text-blue-600">Link</a>
                                @else
                                    <span class="text-xs text-gray-400">-</span>
                                @endif
                            </td>
                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                <a href="{{ route('admin.testimoni.edit', $testimonial) }}" class="btn-admin-secondary">Edit</a>
                                <form action="{{ route('admin.testimoni.destroy', $testimonial) }}" method="POST" class="inline-block ml-2" onsubmit="return confirm('Yakin ingin dihapus?')">
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
