<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurTeam;

class OurTeamController extends Controller
{
    public function index()
    {
        $teams = OurTeam::all();
        return view('admin.team.index', compact('teams'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'history' => 'nullable|string',
            'foto' => 'nullable|image|max:2048'
        ]);

        if($request->hasFile('foto')){
            $data['foto'] = $request->file('foto')->store('team', 'public');
        }

        OurTeam::create($data);
        return redirect()->route('admin.team.index')->with('success', 'Team berhasil ditambahkan');
    }

    public function edit(OurTeam $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    public function update(Request $request, OurTeam $team)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'history' => 'nullable|string',
            'foto' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('team', 'public');
        }

        $team->update($data);
        return redirect()->route('admin.team.index')->with('success', 'Team berhasil diupdate');
    }

    public function destroy(OurTeam $team)
    {
        $team->delete();
        return redirect()->route('admin.team.index')->with('success', 'Team berhasil dihapus');
    }
}
