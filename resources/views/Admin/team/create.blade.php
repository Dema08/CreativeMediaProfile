@extends('admin.layout.main')

@section('content')

@if(session('success'))
<div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg shadow">
    {{ session('success') }}
</div>
@endif

<div class="flex flex-wrap -mx-3">
<div class="w-full px-3">

<div class="bg-white shadow-soft-xl rounded-2xl p-6">

<h5 class="font-bold text-lg mb-6">Tambah Team</h5>

<form action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data">

@csrf

<!-- NAMA -->
<div class="mb-5">
<label class="block text-sm font-semibold text-gray-700 mb-2">
Nama
</label>

<input
type="text"
name="nama"
required
placeholder="Masukkan nama team"
class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition"
/>
</div>


<!-- JABATAN -->
<div class="mb-5">
<label class="block text-sm font-semibold text-gray-700 mb-2">
Jabatan
</label>

<input
type="text"
name="jabatan"
required
placeholder="Contoh: UI Designer"
class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition"
/>
</div>


<!-- HISTORY -->
<div class="mb-5">
<label class="block text-sm font-semibold text-gray-700 mb-2">
History
</label>

<textarea
name="history"
rows="4"
placeholder="Tuliskan pengalaman atau deskripsi singkat"
class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition"
></textarea>
</div>


<!-- FOTO -->
<div class="mb-6">

<label class="block text-sm font-semibold text-gray-700 mb-2">
Upload Foto
</label>

<div class="flex items-center gap-4">

<label class="cursor-pointer inline-flex items-center px-5 py-2.5 bg-gradient-to-r from-orange-500 to-orange-700 text-white text-sm font-semibold rounded-lg shadow hover:from-orange-600 hover:to-orange-800 transition">

<i class="fas fa-upload mr-2"></i>
Pilih File

<input
type="file"
name="foto"
id="foto"
class="hidden"
onchange="updateFileName(this)"
>

</label>

<span id="file-name" class="text-sm text-gray-500">
Belum ada file dipilih
</span>

</div>

</div>


<!-- BUTTON -->
<div class="flex gap-3">

<button
type="submit"
class="px-6 py-3 bg-gradient-to-r from-orange-500 to-orange-700 text-white font-semibold rounded-lg shadow hover:from-orange-600 hover:to-orange-800 transition"
>
<i class="fas fa-save mr-2"></i>
Simpan
</button>

<a
href="{{ route('admin.team.index') }}"
class="px-6 py-3 bg-gray-200 text-gray-700 font-semibold rounded-lg hover:bg-gray-300 transition"
>
Kembali
</a>

</div>

</form>

</div>

</div>
</div>


<script>
function updateFileName(input) {
const fileName = input.files[0]?.name || "Belum ada file dipilih";
document.getElementById("file-name").textContent = fileName;
}
</script>

@endsection
