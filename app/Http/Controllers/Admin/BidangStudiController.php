<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\BidangStudi;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class BidangStudiController extends Controller
{
    public function index()
    {
        $bidangstudis = BidangStudi::all();
        return view('admin.bidangstudi.index', compact('bidangstudis'));
    }

    public function create()
    {
        return view('admin.bidangstudi.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:bidang_studis,slug',
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
            Storage::disk('public')->put('bidang_studi/' . $filename, (string) $resizedImage->encode());
            $data['image_1'] = 'bidang_studi/' . $filename;
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
                Storage::disk('public')->put('bidang_studi/' . $filename, (string) $resizedImage->encode());
                $data[$field] = 'bidang_studi/' . $filename;
            }
        }

        BidangStudi::create($data);

        return redirect()->route('admin.bidangstudi.index')->with('success', 'Bidang Studi berhasil ditambahkan');
    }

    public function edit(BidangStudi $bidangstudi)
    {
        return view('admin.bidangstudi.edit', compact('bidangstudi'));
    }

    public function update(Request $request, BidangStudi $bidangstudi)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:bidang_studis,slug,' . $bidangstudi->id,
            'deskripsi' => 'nullable|string',
            'image_1' => 'nullable|image|max:2048',
            'image_2' => 'nullable|image|max:2048',
            'image_3' => 'nullable|image|max:2048',
            'image_4' => 'nullable|image|max:2048',
        ]);

        // Allow deleting existing images
        foreach (['image_1', 'image_2', 'image_3', 'image_4'] as $field) {
            if ($request->has('delete_'.$field) && $request->boolean('delete_'.$field)) {
                if (! empty($bidangstudi->$field) && Storage::disk('public')->exists($bidangstudi->$field)) {
                    Storage::disk('public')->delete($bidangstudi->$field);
                }

                $data[$field] = null;
            }
        }

        // Replace images if new upload is provided
        foreach (['image_1', 'image_2', 'image_3', 'image_4'] as $index => $field) {
            if ($request->hasFile($field)) {
                if (! empty($bidangstudi->$field) && Storage::disk('public')->exists($bidangstudi->$field)) {
                    Storage::disk('public')->delete($bidangstudi->$field);
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
                Storage::disk('public')->put('bidang_studi/' . $filename, (string) $resizedImage->encode());
                $data[$field] = 'bidang_studi/' . $filename;
            }
        }

        $bidangstudi->update($data);

        return redirect()->route('admin.bidangstudi.index')->with('success', 'Bidang Studi berhasil diupdate');
    }

    public function destroy(BidangStudi $bidangstudi)
    {
        $bidangstudi->delete();
        return redirect()->route('admin.bidangstudi.index')->with('success', 'Bidang Studi berhasil dihapus');
    }
}
