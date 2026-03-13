<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactInfos = ContactInfo::latest()->paginate(10);
        return view('Admin.contact-info.index', compact('contactInfos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.contact-info.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:100',
            'whatsapp_number' => 'required|string|max:20',
            'google_map_embed' => 'required|string',
            'google_map_link' => 'required|url',
            'is_main_office' => 'boolean',
        ]);

        // If setting as main office, unset other main offices
        if ($request->is_main_office) {
            ContactInfo::where('is_main_office', true)->update(['is_main_office' => false]);
        }

        ContactInfo::create($request->all());

        return redirect()->route('admin.contact-info.index')->with('success', 'Contact info berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactInfo $contactInfo)
    {
        return view('Admin.contact-info.show', compact('contactInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactInfo $contactInfo)
    {
        return view('Admin.contact-info.edit', compact('contactInfo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactInfo $contactInfo)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:100',
            'whatsapp_number' => 'required|string|max:20',
            'google_map_embed' => 'required|string',
            'google_map_link' => 'required|url',
            'is_main_office' => 'boolean',
        ]);

        // If setting as main office, unset other main offices
        if ($request->is_main_office) {
            ContactInfo::where('is_main_office', true)->where('id', '!=', $contactInfo->id)->update(['is_main_office' => false]);
        }

        $contactInfo->update($request->all());

        return redirect()->route('admin.contact-info.index')->with('success', 'Contact info berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactInfo $contactInfo)
    {
        $contactInfo->delete();

        return redirect()->route('admin.contact-info.index')->with('success', 'Contact info berhasil dihapus');
    }
}
