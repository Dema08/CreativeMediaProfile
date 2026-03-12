<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurPartner;

class OurPartnerController extends Controller
{
    public function index()
    {
        $partners = OurPartner::all();
        return view('admin.partner.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.partner.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'logo' => 'nullable|image|max:2048'
        ]);

        if($request->hasFile('logo')){
            $data['logo'] = $request->file('logo')->store('partner', 'public');
        }

        OurPartner::create($data);
        return redirect()->route('admin.partner.index')->with('success', 'Partner berhasil ditambahkan');
    }

    public function edit(OurPartner $partner)
    {
        return view('admin.partner.edit', compact('partner'));
    }

    public function update(Request $request, OurPartner $partner)
    {
        $data = $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'logo' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('partner', 'public');
        }

        $partner->update($data);
        return redirect()->route('admin.partner.index')->with('success', 'Partner berhasil diupdate');
    }

    public function destroy(OurPartner $partner)
    {
        $partner->delete();
        return redirect()->route('admin.partner.index')->with('success', 'Partner berhasil dihapus');
    }
}
