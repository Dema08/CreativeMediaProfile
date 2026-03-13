<?php

namespace App\Http\Controllers;

use App\Models\BidangStudi;

class BidangStudiController extends Controller
{
    public function index()
    {
        $bidangstudis = BidangStudi::all();
        return view('users.bidangstudi-list', compact('bidangstudis'));
    }

    public function show($slug)
    {
        $bidangstudi = BidangStudi::where('slug', $slug)->firstOrFail();
        return view('users.bidangstudi', compact('bidangstudi'));
    }
}
