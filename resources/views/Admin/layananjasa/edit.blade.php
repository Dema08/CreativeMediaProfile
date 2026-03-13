@extends('admin.layout.main')

@section('content')

<div class="flex flex-wrap -mx-3 mb-4">
<div class="w-full px-3">

<div class="bg-white shadow-soft-xl rounded-2xl p-6">

<div class="flex justify-between items-center mb-6">
<h5 class="font-bold text-lg">Edit Layanan Jasa</h5>

<a href="{{ route('admin.layananjasa.index') }}"
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

<form action="{{ route('admin.layananjasa.update', $layananjasa) }}" method="POST" enctype="multipart/form-data">

@csrf
@method('PUT')

<!-- NAMA -->
<div class="mb-5">
<label class="block text-sm font-semibold text-gray-700 mb-2">
Nama
</label>

<input
type="text"
name="nama"
value="{{ old('nama', $layananjasa->nama) }}"
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
value="{{ old('slug', $layananjasa->slug) }}"
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
>{{ old('deskripsi', $layananjasa->deskripsi) }}</textarea>
</div>


<!-- GAMBAR UTAMA -->
<div class="mb-6">

<label class="block text-sm font-semibold text-gray-700 mb-2">
Gambar Utama (1170x580)
</label>

@if($layananjasa->image_1)

<div class="flex items-center gap-4 mb-3">

<img
src="{{ asset('storage/'.$layananjasa->image_1) }}"
class="w-24 h-16 object-cover rounded-lg border"
alt="{{ $layananjasa->nama }}"
>

<div class="flex items-center text-sm text-gray-600">
<input type="checkbox" name="delete_image_1" value="1" class="mr-2">
Hapus gambar
</div>

</div>

@endif

<input
type="file"
name="image_1"
onchange="updateFileName(this,'file-name-1')"
class="w-full text-sm"
/>

<span id="file-name-1" class="text-xs text-gray-400"></span>

</div>


<!-- GAMBAR TAMBAHAN -->
<div class="mb-6">

<label class="block text-sm font-semibold text-gray-700 mb-3">
Gambar Tambahan
</label>

<div class="grid grid-cols-1 sm:grid-cols-3 gap-6">

@foreach(['image_2','image_3','image_4'] as $field)

<div class="border rounded-lg p-3">

<label class="text-sm font-semibold text-gray-600 mb-2 block">
{{ ucfirst(str_replace('_',' ',$field)) }}
</label>

@if($layananjasa->$field)

<div class="flex items-center gap-3 mb-3">

<img
src="{{ asset('storage/'.$layananjasa->$field) }}"
class="w-20 h-16 object-cover rounded border"
>

<label class="text-xs text-gray-600 flex items-center">
<input type="checkbox" name="delete_{{ $field }}" value="1" class="mr-2">
Hapus
</label>

</div>

@endif

<input
type="file"
name="{{ $field }}"
onchange="updateFileName(this,'file-name-{{ $field }}')"
class="w-full text-xs"
/>

<span id="file-name-{{ $field }}" class="text-xs text-gray-400"></span>

</div>

@endforeach

</div>

</div>


<!-- BUTTON -->
<div class="flex gap-3">

<button
type="submit"
class="px-6 py-3 bg-gradient-to-r from-orange-500 to-orange-700 text-white font-semibold rounded-lg shadow hover:from-orange-600 hover:to-orange-800 transition">
Update
</button>

<a href="{{ route('admin.layananjasa.index') }}"
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
const fileName=input.files[0]?.name || "";
document.getElementById(id).textContent=fileName;
}
</script>

@endsection
