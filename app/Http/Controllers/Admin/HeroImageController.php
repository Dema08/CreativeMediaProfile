<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeroImage;

class HeroImageController extends Controller
{
    public function index()
    {
        $heros = HeroImage::all();
        return view('admin.hero.index', compact('heros'));
    }

    public function create()
    {
        return view('admin.hero.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'required|image|max:2048'
        ]);

        if($request->hasFile('gambar')){
            $data['gambar'] = $request->file('gambar')->store('hero', 'public');
        }

        HeroImage::create($data);
        return redirect()->route('admin.hero.index')->with('success', 'Hero image berhasil ditambahkan');
    }

    public function edit(HeroImage $hero)
    {
        return view('admin.hero.edit', compact('hero'));
    }

    public function update(Request $request, HeroImage $hero)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|max:2048'
        ]);

        if($request->hasFile('gambar')){
            $data['gambar'] = $request->file('gambar')->store('hero', 'public');
        }

        $hero->update($data);
        return redirect()->route('admin.hero.index')->with('success', 'Hero image berhasil diupdate');
    }

    public function destroy(HeroImage $hero)
    {
        $hero->delete();
        return redirect()->route('admin.hero.index')->with('success', 'Hero image berhasil dihapus');
    }
}
