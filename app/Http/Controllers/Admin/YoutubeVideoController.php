<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\YoutubeVideo;
use Illuminate\Http\Request;

class YoutubeVideoController extends Controller
{
    public function index()
    {
        $videos = YoutubeVideo::orderBy('urutan')->get();
        return view('admin.youtube-video.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.youtube-video.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'youtube_url' => 'required|url',
            'deskripsi' => 'nullable|string',
            'urutan' => 'nullable|integer',
        ]);

        YoutubeVideo::create($data);

        return redirect()->route('admin.youtube-video.index')
            ->with('success', 'Video berhasil ditambahkan.');
    }

    public function edit(YoutubeVideo $youtubeVideo)
    {
        return view('admin.youtube-video.edit', compact('youtubeVideo'));
    }

    public function update(Request $request, YoutubeVideo $youtubeVideo)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'youtube_url' => 'required|url',
            'deskripsi' => 'nullable|string',
            'urutan' => 'nullable|integer',
        ]);

        $youtubeVideo->update($data);

        return redirect()->route('admin.youtube-video.index')
            ->with('success', 'Video berhasil diperbarui.');
    }

    public function destroy(YoutubeVideo $youtubeVideo)
    {
        $youtubeVideo->delete();

        return redirect()->route('admin.youtube-video.index')
            ->with('success', 'Video berhasil dihapus.');
    }
}
