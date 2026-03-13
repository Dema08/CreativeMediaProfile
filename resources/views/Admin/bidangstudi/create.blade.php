@extends('admin.layout.main')

@section('content')

<div class="flex flex-wrap -mx-3 mb-4">
<div class="w-full px-3">

<div class="bg-white shadow-soft-xl rounded-2xl p-6">

<div class="flex justify-between items-center mb-6">
<h5 class="font-bold text-lg">Tambah Bidang Studi</h5>

<a href="{{ route('admin.bidangstudi.index') }}"
class="px-5 py-2 bg-gray-200 text-gray-700 font-semibold rounded-lg hover:bg-gray-300 transition">
Kembali
</a>
</div>

@if($errors->any())
<div class="mb-5 p-4 bg-red-100 text-red-800 rounded-lg">
<ul class="list-disc list-inside text-sm">
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form action="{{ route('admin.bidangstudi.store') }}" method="POST" enctype="multipart/form-data">

@csrf

<!-- NAMA -->
<div class="mb-5">
<label class="block text-sm font-semibold text-gray-700 mb-2">
Nama
</label>

<input
type="text"
name="nama"
value="{{ old('nama') }}"
required
class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition"
/>
</div>


<!-- SLUG -->
<div class="mb-5">
<label class="block text-sm font-semibold text-gray-700 mb-2">
Slug (optional)
</label>

<input
type="text"
name="slug"
value="{{ old('slug') }}"
placeholder="otomatis dibuat dari nama jika kosong"
class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition"
/>
</div>


<!-- DESKRIPSI -->
<div class="mb-5">
<label class="block text-sm font-semibold text-gray-700 mb-2">
Deskripsi
</label>

<textarea
name="deskripsi"
rows="4"
class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition"
>{{ old('deskripsi') }}</textarea>
</div>


<!-- GAMBAR UTAMA -->
<div class="mb-6">

<label class="block text-sm font-semibold text-gray-700 mb-2">
Upload Gambar Utama
</label>

<div class="flex items-center gap-4">

<label class="cursor-pointer inline-flex items-center px-5 py-2.5 bg-gradient-to-r from-orange-500 to-orange-700 text-white text-sm font-semibold rounded-lg shadow hover:from-orange-600 hover:to-orange-800 transition">

Pilih File

<input
type="file"
name="image_1"
id="image_1"
class="hidden"
required
onchange="updateFileName(this,'file-name-1')"
>

</label>

<span id="file-name-1" class="text-sm text-gray-500">
Belum ada file dipilih
</span>

</div>

</div>


<!-- GAMBAR TAMBAHAN -->
<div class="mb-6">

<label class="block text-sm font-semibold text-gray-700 mb-3">
Gambar Tambahan
</label>

<div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

<div>

<label class="text-sm text-gray-600 mb-1 block">Gambar 2</label>

<input
type="file"
name="image_2"
onchange="updateFileName(this,'file-name-2')"
class="w-full text-sm"
/>

<span id="file-name-2" class="text-xs text-gray-400"></span>

</div>

<div>

<label class="text-sm text-gray-600 mb-1 block">Gambar 3</label>

<input
type="file"
name="image_3"
onchange="updateFileName(this,'file-name-3')"
class="w-full text-sm"
/>

<span id="file-name-3" class="text-xs text-gray-400"></span>

</div>

<div>

<label class="text-sm text-gray-600 mb-1 block">Gambar 4</label>

<input
type="file"
name="image_4"
onchange="updateFileName(this,'file-name-4')"
class="w-full text-sm"
/>

<span id="file-name-4" class="text-xs text-gray-400"></span>

</div>

</div>

</div>


<!-- BUTTON -->
<div class="flex gap-3">

<button
type="submit"
class="px-6 py-3 bg-gradient-to-r from-orange-500 to-orange-700 text-white font-semibold rounded-lg shadow hover:from-orange-600 hover:to-orange-800 transition">
Simpan
</button>

<a href="{{ route('admin.bidangstudi.index') }}"
class="px-6 py-3 bg-gray-200 text-gray-700 font-semibold rounded-lg hover:bg-gray-300 transition">
Kembali
</a>

</div>

</form>

</div>

</div>
</div>

<script>
function updateFileName(input,id){
const fileName=input.files[0]?.name || "Belum ada file dipilih";
document.getElementById(id).textContent=fileName;
}
</script>

@endsection
