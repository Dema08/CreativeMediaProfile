<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeroImage;
use App\Models\OurPartner;
use App\Models\OurTeam;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Storage;

class HeroImageController extends Controller
{
    public function index()
    {
        $heros = HeroImage::all();
        return view('admin.hero.index', compact('heros'));
    }

    public function frontend()
    {
        $heros = HeroImage::all();
        $partners = OurPartner::all();
        $teams = OurTeam::all();

        return view('users.beranda', compact('heros', 'partners', 'teams'));
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
            $image = $request->file('gambar');
            $filename = time() . '.' . $image->getClientOriginalExtension();

            // Resize image to 972x767 using Intervention Image
            $manager = new ImageManager(new Driver());
            $resizedImage = $manager->read($image)->resize(972, 767, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            // Store the resized image
            Storage::disk('public')->put('hero/' . $filename, (string) $resizedImage->encode());
            $data['gambar'] = 'hero/' . $filename;
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
            // Delete old image if exists
            if($hero->gambar && Storage::disk('public')->exists($hero->gambar)){
                Storage::disk('public')->delete($hero->gambar);
            }

            $image = $request->file('gambar');
            $filename = time() . '.' . $image->getClientOriginalExtension();

            // Resize image to 972x767 using Intervention Image
            $manager = new ImageManager(new Driver());
            $resizedImage = $manager->read($image)->resize(972, 767, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            // Store the resized image
            Storage::disk('public')->put('hero/' . $filename, (string) $resizedImage->encode());
            $data['gambar'] = 'hero/' . $filename;
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
