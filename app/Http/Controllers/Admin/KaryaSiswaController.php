<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KaryaSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KaryaSiswaController extends Controller
{
    protected function resizeAndStoreImage(Request $request, string $field, string $directory, int $width, int $height): ?string
    {
        if (! $request->hasFile($field)) {
            return null;
        }

        $file = $request->file($field);
        $mime = $file->getMimeType();

        // If GD isn't available or the file is not a common image type, fall back to default storage.
        if (! function_exists('imagecreatetruecolor') || ! in_array($mime, ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'])) {
            return $file->store($directory, 'public');
        }

        $srcImage = null;
        if (in_array($mime, ['image/jpeg', 'image/jpg'])) {
            $srcImage = imagecreatefromjpeg($file->getPathname());
        } elseif ($mime === 'image/png') {
            $srcImage = imagecreatefrompng($file->getPathname());
        } elseif ($mime === 'image/gif') {
            $srcImage = imagecreatefromgif($file->getPathname());
        }

        if (! $srcImage) {
            return $file->store($directory, 'public');
        }

        $resized = imagecreatetruecolor($width, $height);

        if (in_array($mime, ['image/png', 'image/gif'])) {
            imagecolortransparent($resized, imagecolorallocatealpha($resized, 0, 0, 0, 127));
            imagealphablending($resized, false);
            imagesavealpha($resized, true);
        }

        $origW = imagesx($srcImage);
        $origH = imagesy($srcImage);

        imagecopyresampled($resized, $srcImage, 0, 0, 0, 0, $width, $height, $origW, $origH);

        // Ensure the target directory exists in storage/app/public
        Storage::disk('public')->makeDirectory($directory);

        $filename = $directory.'/'.uniqid('', true).'.'.($file->extension() ?: 'jpg');
        $fullPath = storage_path('app/public/'.$filename);

        if ($mime === 'image/png') {
            imagepng($resized, $fullPath);
        } elseif ($mime === 'image/gif') {
            imagegif($resized, $fullPath);
        } else {
            imagejpeg($resized, $fullPath, 85);
        }

        imagedestroy($srcImage);
        imagedestroy($resized);

        return $filename;
    }

    public function index()
    {
        $karyas = KaryaSiswa::all();
        return view('admin.karyasiswa.index', compact('karyas'));
    }

    public function create()
    {
        return view('admin.karyasiswa.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:karya_siswas,slug',
            'kategori' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'image' => 'required|image|max:4096',
        ]);

        $data['image'] = $this->resizeAndStoreImage($request, 'image', 'karya_siswa', 1170, 580);

        KaryaSiswa::create($data);

        return redirect()->route('admin.karyasiswa.index')->with('success', 'Karya Siswa berhasil ditambahkan');
    }

    public function edit(KaryaSiswa $karyasiswa)
    {
        return view('admin.karyasiswa.edit', compact('karyasiswa'));
    }

    public function update(Request $request, KaryaSiswa $karyasiswa)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:karya_siswas,slug,' . $karyasiswa->id,
            'kategori' => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'image' => 'nullable|image|max:4096',
        ]);

        if ($request->has('delete_image') && $request->boolean('delete_image')) {
            if (! empty($karyasiswa->image) && Storage::disk('public')->exists($karyasiswa->image)) {
                Storage::disk('public')->delete($karyasiswa->image);
            }
            $data['image'] = null;
        }

        if ($request->hasFile('image')) {
            if (! empty($karyasiswa->image) && Storage::disk('public')->exists($karyasiswa->image)) {
                Storage::disk('public')->delete($karyasiswa->image);
            }
            $data['image'] = $this->resizeAndStoreImage($request, 'image', 'karya_siswa', 1170, 580);
        }

        $karyasiswa->update($data);

        return redirect()->route('admin.karyasiswa.index')->with('success', 'Karya Siswa berhasil diupdate');
    }

    public function destroy(KaryaSiswa $karyasiswa)
    {
        if (! empty($karyasiswa->image) && Storage::disk('public')->exists($karyasiswa->image)) {
            Storage::disk('public')->delete($karyasiswa->image);
        }
        $karyasiswa->delete();

        return redirect()->route('admin.karyasiswa.index')->with('success', 'Karya Siswa berhasil dihapus');
    }
}
