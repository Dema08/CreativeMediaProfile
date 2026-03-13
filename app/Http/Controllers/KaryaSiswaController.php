<?php

namespace App\Http\Controllers;

use App\Models\KaryaSiswa;
use Illuminate\Http\Request;

class KaryaSiswaController extends Controller
{
    public function index(Request $request)
    {
        $categories = KaryaSiswa::select('kategori')
            ->whereNotNull('kategori')
            ->distinct()
            ->pluck('kategori');

        $selectedCategory = $request->query('kategori');

        $karyas = KaryaSiswa::when($selectedCategory, function ($query, $selectedCategory) {
            return $query->where('kategori', $selectedCategory);
        })->get();

        return view('users.karyasiswa', compact('karyas', 'categories', 'selectedCategory'));
    }

    public function show($slug)
    {
        $karya = KaryaSiswa::where('slug', $slug)->firstOrFail();
        return view('users.karyasiswa-detail', compact('karya'));
    }
}
