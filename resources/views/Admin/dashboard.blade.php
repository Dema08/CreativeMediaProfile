@extends('admin.layout.main')

@section('content')

{{-- HEADER --}}
<div class="mb-6">
    <div class="bg-linear-to-r from-orange-500 via-orange-600 to-orange-700 rounded-2xl shadow-xl p-6 text-white flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold mb-1">Dashboard Admin</h2>
            <p class="text-orange-100 text-sm">
                Welcome back, <span class="font-semibold">{{ auth()->guard('admin')->user()->username }}</span>
            </p>
        </div>

        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button class="bg-linear-to-r from-red-500 to-red-600 text-white px-4 py-2 rounded-lg font-semibold shadow-lg hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                <i class="fas fa-sign-out-alt mr-2"></i>
                Logout
            </button>
        </form>
    </div>
</div>


{{-- STATISTICS --}}
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">

    {{-- Artikel --}}
    <div class="bg-white rounded-2xl shadow-md p-5 hover:shadow-xl transition">
        <div class="flex justify-between items-center">
            <div>
                <p class="text-gray-500 text-sm">Total Artikel</p>
                <h3 class="text-3xl font-bold text-gray-800">
                    {{ \App\Models\Artikel::count() }}
                </h3>
            </div>
            <div class="bg-orange-100 p-4 rounded-full">
                <i class="fa fa-newspaper text-orange-600 text-xl"></i>
            </div>
        </div>
    </div>

    {{-- Karya Siswa --}}
    <div class="bg-white rounded-2xl shadow-md p-5 hover:shadow-xl transition">
        <div class="flex justify-between items-center">
            <div>
                <p class="text-gray-500 text-sm">Total Karya Siswa</p>
                <h3 class="text-3xl font-bold text-gray-800">
                    {{ \App\Models\KaryaSiswa::count() }}
                </h3>
            </div>
            <div class="bg-orange-100 p-4 rounded-full">
                <i class="fa fa-graduation-cap text-orange-600 text-xl"></i>
            </div>
        </div>
    </div>

    {{-- Testimoni --}}
    <div class="bg-white rounded-2xl shadow-md p-5 hover:shadow-xl transition">
        <div class="flex justify-between items-center">
            <div>
                <p class="text-gray-500 text-sm">Testimonial</p>
                <h3 class="text-3xl font-bold text-gray-800">
                    {{ \App\Models\Testimonial::count() }}
                </h3>
            </div>
            <div class="bg-orange-100 p-4 rounded-full">
                <i class="fa fa-comments text-orange-600 text-xl"></i>
            </div>
        </div>
    </div>

    {{-- Komentar --}}
    <div class="bg-white rounded-2xl shadow-md p-5 hover:shadow-xl transition">
        <div class="flex justify-between items-center">
            <div>
                <p class="text-gray-500 text-sm">Komentar</p>
                <h3 class="text-3xl font-bold text-gray-800">
                    {{ \App\Models\Komentar::count() }}
                </h3>
            </div>
            <div class="bg-orange-100 p-4 rounded-full">
                <i class="fa fa-comment text-orange-600 text-xl"></i>
            </div>
        </div>
    </div>

</div>


{{-- STATISTIK + AKTIVITAS --}}
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">

    {{-- Statistik Artikel --}}
    <div class="bg-white rounded-2xl shadow-md p-6">
        <h4 class="font-bold text-gray-700 mb-4">Statistik Artikel</h4>

        @php
            $total = \App\Models\Artikel::count();
            $published = \App\Models\Artikel::where('is_published', true)->count();
            $draft = \App\Models\Artikel::where('is_published', false)->count();
            $percent = $total > 0 ? ($published/$total)*100 : 0;
        @endphp

        <div class="space-y-3">
            <div class="flex justify-between text-sm">
                <span class="text-gray-600">Diterbitkan</span>
                <span class="font-semibold text-gray-800">{{ $published }}</span>
            </div>

            <div class="flex justify-between text-sm">
                <span class="text-gray-600">Draft</span>
                <span class="font-semibold text-gray-800">{{ $draft }}</span>
            </div>

            <div class="w-full bg-gray-200 rounded-full h-3 mt-2">
                <div class="bg-orange-500 h-3 rounded-full transition-all duration-500"
                    style="width: {{ $percent }}%">
                </div>
            </div>
        </div>
    </div>


    {{-- Aktivitas Terbaru --}}
    <div class="bg-white rounded-2xl shadow-md p-6">
        <h4 class="font-bold text-gray-700 mb-4">Aktivitas Terbaru</h4>

        @php
            $latestArtikels = \App\Models\Artikel::latest()->take(5)->get();
        @endphp

        <div class="space-y-4">

            @forelse($latestArtikels as $artikel)

            <div class="flex justify-between items-center border-b pb-2">
                <div>
                    <p class="font-medium text-gray-800">
                        {{ Str::limit($artikel->title,30) }}
                    </p>
                    <p class="text-xs text-gray-500">
                        {{ $artikel->created_at->diffForHumans() }}
                    </p>
                </div>

                <span class="text-xs px-3 py-1 rounded-full
                {{ $artikel->is_published ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                    {{ $artikel->is_published ? 'Published' : 'Draft' }}
                </span>
            </div>

            @empty
            <p class="text-gray-500 text-sm">Belum ada aktivitas</p>
            @endforelse

        </div>
    </div>

</div>


{{-- QUICK ACTION + NOTIFICATION --}}
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

    {{-- Quick Menu --}}
    <div class="bg-white rounded-2xl shadow-md p-6">
        <h4 class="font-bold text-gray-700 mb-4">Menu Cepat</h4>

        <div class="space-y-3">

            <a href="{{ route('admin.artikel.index') }}"
                class="flex justify-between items-center p-3 bg-gray-50 rounded-lg hover:bg-orange-50 transition">
                <span class="text-gray-700">Manajemen Artikel</span>
                <i class="fa fa-arrow-right text-orange-500"></i>
            </a>

            <a href="{{ route('admin.karyasiswa.index') }}"
                class="flex justify-between items-center p-3 bg-gray-50 rounded-lg hover:bg-orange-50 transition">
                <span class="text-gray-700">Karya Siswa</span>
                <i class="fa fa-arrow-right text-orange-500"></i>
            </a>

            <a href="{{ route('admin.testimoni.index') }}"
                class="flex justify-between items-center p-3 bg-gray-50 rounded-lg hover:bg-orange-50 transition">
                <span class="text-gray-700">Testimonial</span>
                <i class="fa fa-arrow-right text-orange-500"></i>
            </a>

        </div>
    </div>


    {{-- Notifikasi --}}
    <div class="bg-white rounded-2xl shadow-md p-6 lg:col-span-2">
        <h4 class="font-bold text-gray-700 mb-4">Pemberitahuan Sistem</h4>

        <div class="space-y-4">

            <div class="flex items-start bg-blue-50 p-4 rounded-lg">
                <i class="fa fa-info-circle text-blue-500 text-lg mr-3"></i>
                <div>
                    <p class="font-semibold text-gray-700">Sistem Normal</p>
                    <p class="text-sm text-gray-500">Semua fitur dashboard berjalan dengan baik.</p>
                </div>
            </div>

            @if(\App\Models\Artikel::where('is_published', false)->count() > 0)

            <div class="flex items-start bg-yellow-50 p-4 rounded-lg">
                <i class="fa fa-exclamation-triangle text-yellow-500 text-lg mr-3"></i>
                <div>
                    <p class="font-semibold text-gray-700">Artikel Draft</p>
                    <p class="text-sm text-gray-500">
                        {{ \App\Models\Artikel::where('is_published', false)->count() }}
                        artikel masih berstatus draft.
                    </p>
                </div>
            </div>

            @endif

        </div>
    </div>

</div>

@endsection
