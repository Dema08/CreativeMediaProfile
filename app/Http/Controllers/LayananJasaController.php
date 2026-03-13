<?php

namespace App\Http\Controllers;

use App\Models\LayananJasa;

class LayananJasaController extends Controller
{
    public function index()
    {
        $layanans = LayananJasa::all();
        return view('users.layananjasa-list', compact('layanans'));
    }

    public function show($slug)
    {
        $layananjasa = LayananJasa::where('slug', $slug)->firstOrFail();
        return view('users.layananjasa', compact('layananjasa'));
    }
}
