<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('admin.testimoni.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'nullable|string|max:255',
            'pesan' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'foto' => 'nullable|image|max:2048',
            'youtube_url' => 'nullable|url',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('testimonials', 'public');
        }

        Testimonial::create($data);

        return redirect()->route('admin.testimoni.index')->with('success', 'Testimoni berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimoni)
    {
        return view('admin.testimoni.show', compact('testimoni'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimoni)
    {
        return view('admin.testimoni.edit', compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimoni)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'nullable|string|max:255',
            'pesan' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'foto' => 'nullable|image|max:2048',
            'youtube_url' => 'nullable|url',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('testimonials', 'public');
        }

        $testimoni->update($data);

        return redirect()->route('admin.testimoni.index')->with('success', 'Testimoni berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimoni)
    {
        $testimoni->delete();
        return redirect()->route('admin.testimoni.index')->with('success', 'Testimoni berhasil dihapus');
    }
}
