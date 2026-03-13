@extends('admin.layout.main')

@section('content')
<div class="flex flex-wrap -mx-3">
    <div class="w-full px-3">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white shadow-soft-xl rounded-2xl">
            <div class="p-4">
                <h5 class="font-bold mb-4">Detail Testimoni</h5>

                <div class="mb-4">
                    <h6 class="font-semibold">Nama</h6>
                    <p>{{ $testimoni->nama }}</p>
                </div>

                <div class="mb-4">
                    <h6 class="font-semibold">Jabatan</h6>
                    <p>{{ $testimoni->jabatan }}</p>
                </div>

                <div class="mb-4">
                    <h6 class="font-semibold">Pesan</h6>
                    <p>{{ $testimoni->pesan }}</p>
                </div>

                <div class="mb-4">
                    <h6 class="font-semibold">Rating</h6>
                    <p>{{ $testimoni->rating }}/5</p>
                </div>

                @if($testimoni->youtube_url)
                    <div class="mb-4">
                        <h6 class="font-semibold">YouTube</h6>
                        <a href="{{ $testimoni->youtube_url }}" target="_blank" class="text-blue-600">{{ $testimoni->youtube_url }}</a>
                    </div>
                @endif

                @if($testimoni->foto)
                    <div class="mb-4">
                        <h6 class="font-semibold">Foto</h6>
                        <img src="{{ asset('storage/'.$testimoni->foto) }}" alt="" class="h-24 w-24 rounded-full">
                    </div>
                @endif

                <a href="{{ route('admin.testimoni.index') }}" class="btn-admin-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
