<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\YoutubeVideo;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        $videos = YoutubeVideo::orderBy('urutan')->get();

        return view('users.Testimoni', [
            'testimonials' => $testimonials,
            'videos' => $videos,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'nullable|string|max:255',
            'pesan' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('testimonials', 'public');
        }

        Testimonial::create($data);

        return back()->with('success', 'Terima kasih! Testimoni Anda berhasil dikirim.');
    }
}
