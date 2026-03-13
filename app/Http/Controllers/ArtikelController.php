<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikels = Artikel::where('is_published', true)
            ->where('published_at', '<=', now())
            ->latest()
            ->paginate(6);

        return view('users.artikel', compact('artikels'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        if (!$artikel->is_published || ($artikel->published_at && $artikel->published_at > now())) {
            abort(404);
        }

        // Get related articles (other published articles)
        $relatedArticles = Artikel::where('is_published', true)
            ->where('published_at', '<=', now())
            ->where('id', '!=', $artikel->id)
            ->latest()
            ->limit(5)
            ->get();

        return view('users.artikel-detail', compact('artikel', 'relatedArticles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeComment(Request $request, Artikel $artikel)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'message' => 'required|string|max:500',
        ]);

        $artikel->komentars()->create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'is_approved' => false, // Menunggu persetujuan admin
        ]);

        return redirect()->back()->with('success', 'Komentar Anda telah dikirim dan sedang menunggu persetujuan admin.');
    }
}
