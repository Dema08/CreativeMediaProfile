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

<h5 class="font-bold text-lg mb-6">Tambah Contact Info</h5>

<form action="{{ route('admin.contact-info.store') }}" method="POST">

@csrf

<!-- NAMA CABANG -->
<div class="mb-5">

<label class="block text-sm font-semibold text-gray-700 mb-2">
Nama Cabang
</label>

<input
type="text"
name="name"
required
placeholder="Masukkan nama cabang"
class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition"
/>

</div>

<!-- ALAMAT -->
<div class="mb-5">

<label class="block text-sm font-semibold text-gray-700 mb-2">
Alamat
</label>

<textarea
name="address"
required
rows="3"
placeholder="Masukkan alamat lengkap"
class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition"
></textarea>

</div>

<!-- TELEPON -->
<div class="mb-5">

<label class="block text-sm font-semibold text-gray-700 mb-2">
Telepon
</label>

<input
type="text"
name="phone"
required
placeholder="Masukkan nomor telepon"
class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition"
/>

</div>

<!-- EMAIL -->
<div class="mb-5">

<label class="block text-sm font-semibold text-gray-700 mb-2">
Email
</label>

<input
type="email"
name="email"
required
placeholder="Masukkan email"
class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition"
/>

</div>

<!-- WHATSAPP NUMBER -->
<div class="mb-5">

<label class="block text-sm font-semibold text-gray-700 mb-2">
Nomor WhatsApp
</label>

<input
type="text"
name="whatsapp_number"
required
placeholder="Masukkan nomor WhatsApp"
class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition"
/>

</div>

<!-- GOOGLE MAP EMBED -->
<div class="mb-5">

<label class="block text-sm font-semibold text-gray-700 mb-2">
Google Map Embed
</label>

<textarea
name="google_map_embed"
required
rows="4"
placeholder="Masukkan kode embed Google Map"
class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition"
></textarea>

</div>

<!-- GOOGLE MAP LINK -->
<div class="mb-5">

<label class="block text-sm font-semibold text-gray-700 mb-2">
Google Map Link
</label>

<input
type="url"
name="google_map_link"
required
placeholder="Masukkan link Google Map"
class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 outline-none transition"
/>

</div>

<!-- IS MAIN OFFICE -->
<div class="mb-6">

<label class="flex items-center">
<input
type="checkbox"
name="is_main_office"
value="1"
class="mr-3 h-4 w-4 text-orange-600 focus:ring-orange-500 border-gray-300 rounded"
/>
<span class="text-sm font-semibold text-gray-700">Jadikan Kantor Pusat</span>
</label>

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

<a href="{{ route('admin.contact-info.index') }}"
class="px-6 py-3 bg-gray-200 text-gray-700 font-semibold rounded-lg hover:bg-gray-300 transition">
Kembali
</a>

</div>

</form>

</div>

</div>
</div>

@endsection
