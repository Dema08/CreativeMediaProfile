<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\LayananJasa;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class LayananJasaController extends Controller
{
    public function index()
    {
        $layanans = LayananJasa::all();
        return view('admin.layananjasa.index', compact('layanans'));
    }

    public function create()
    {
        return view('admin.layananjasa.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:layanan_jasas,slug',
            'deskripsi' => 'nullable|string',
            'image_1' => 'required|image|max:2048',
            'image_2' => 'nullable|image|max:2048',
            'image_3' => 'nullable|image|max:2048',
            'image_4' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image_1')) {
            $image = $request->file('image_1');
            $filename = time() . '_1.' . $image->getClientOriginalExtension();

            // Resize image to 1170x580 using Intervention Image
            $manager = new ImageManager(new Driver());
            $resizedImage = $manager->read($image)->resize(1170, 580, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            // Store the resized image
            Storage::disk('public')->put('layanan_jasa/' . $filename, (string) $resizedImage->encode());
            $data['image_1'] = 'layanan_jasa/' . $filename;
        }

        foreach (['image_2', 'image_3', 'image_4'] as $index => $field) {
            if ($request->hasFile($field)) {
                $image = $request->file($field);
                $filename = time() . '_' . ($index + 2) . '.' . $image->getClientOriginalExtension();

                // Resize image to 1170x580 using Intervention Image
                $manager = new ImageManager(new Driver());
                $resizedImage = $manager->read($image)->resize(1170, 580, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

                // Store the resized image
                Storage::disk('public')->put('layanan_jasa/' . $filename, (string) $resizedImage->encode());
                $data[$field] = 'layanan_jasa/' . $filename;
            }
        }

        LayananJasa::create($data);

        return redirect()->route('admin.layananjasa.index')->with('success', 'Layanan Jasa berhasil ditambahkan');
    }

    public function edit(LayananJasa $layananjasa)
    {
        return view('admin.layananjasa.edit', compact('layananjasa'));
    }

    public function update(Request $request, LayananJasa $layananjasa)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:layanan_jasas,slug,' . $layananjasa->id,
            'deskripsi' => 'nullable|string',
            'image_1' => 'nullable|image|dimensions:width=1170,height=580|max:2048',
            'image_2' => 'nullable|image|max:2048',
            'image_3' => 'nullable|image|max:2048',
            'image_4' => 'nullable|image|max:2048',
        ]);

        foreach (['image_1', 'image_2', 'image_3', 'image_4'] as $field) {
            if ($request->has('delete_'.$field) && $request->boolean('delete_'.$field)) {
                if (! empty($layananjasa->$field) && Storage::disk('public')->exists($layananjasa->$field)) {
                    Storage::disk('public')->delete($layananjasa->$field);
                }

                $data[$field] = null;
            }
        }

        foreach (['image_1', 'image_2', 'image_3', 'image_4'] as $index => $field) {
            if ($request->hasFile($field)) {
                if (! empty($layananjasa->$field) && Storage::disk('public')->exists($layananjasa->$field)) {
                    Storage::disk('public')->delete($layananjasa->$field);
                }

                $image = $request->file($field);
                $filename = time() . '_' . ($index + 1) . '.' . $image->getClientOriginalExtension();

                // Resize image to 1170x580 using Intervention Image
                $manager = new ImageManager(new Driver());
                $resizedImage = $manager->read($image)->resize(1170, 580, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });

                // Store the resized image
                Storage::disk('public')->put('layanan_jasa/' . $filename, (string) $resizedImage->encode());
                $data[$field] = 'layanan_jasa/' . $filename;
            }
        }

        $layananjasa->update($data);

        return redirect()->route('admin.layananjasa.index')->with('success', 'Layanan Jasa berhasil diupdate');
    }

    public function destroy(LayananJasa $layananjasa)
    {
        $layananjasa->delete();
        return redirect()->route('admin.layananjasa.index')->with('success', 'Layanan Jasa berhasil dihapus');
    }
}
