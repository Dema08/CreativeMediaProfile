@extends('admin.layout.main')

@section('content')

@if(session('success'))
<div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg">
    {{ session('success') }}
</div>
@endif

<div class="flex flex-wrap -mx-3">
<div class="w-full px-3">

<div class="bg-white shadow-soft-xl rounded-2xl p-6">

<h5 class="font-bold text-lg mb-6">Edit Hero Image</h5>

<form action="{{ route('admin.hero.update', $hero->id) }}" method="POST" enctype="multipart/form-data">

@csrf
@method('PUT')

<!-- JUDUL -->
<div class="mb-5">
<label class="block text-sm font-semibold text-gray-700 mb-2">
Judul
</label>

<input
type="text"
name="judul"
value="{{ $hero->judul }}"
required
class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition"
/>
</div>


<!-- GAMBAR -->
<div class="mb-6">

<label class="block text-sm font-semibold text-gray-700 mb-2">
Upload Gambar
</label>

<div class="flex items-center gap-4">

<!-- tombol custom -->
<label class="cursor-pointer inline-flex items-center px-5 py-2.5 bg-gradient-to-r from-orange-500 to-orange-700 text-white text-sm font-semibold rounded-lg shadow hover:from-orange-600 hover:to-orange-800 transition">

<i class="fas fa-upload mr-2"></i>
Pilih File

<input
type="file"
name="gambar"
id="gambar"
class="hidden"
onchange="updateFileName(this)"
>

</label>

<!-- nama file -->
<span id="file-name" class="text-sm text-gray-500">
Belum ada file dipilih
</span>

</div>


<!-- preview gambar lama -->
@if($hero->gambar)
<div class="mt-4">
<img src="{{ asset('storage/'.$hero->gambar) }}"
class="w-32 rounded-lg shadow border">
</div>
@endif

</div>


<!-- BUTTON -->
<button
type="submit"
class="px-6 py-3 bg-gradient-to-r from-orange-500 to-orange-700 text-white font-semibold rounded-lg shadow hover:from-orange-600 hover:to-orange-800 transition"
>
Update
</button>

</form>

</div>

</div>
</div>

<!-- SCRIPT -->
<script>
function updateFileName(input) {
    const fileName = input.files[0]?.name || "Belum ada file dipilih";
    document.getElementById("file-name").textContent = fileName;
}
</script>

@endsection
