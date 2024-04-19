<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $images = Storage::disk('vultr')->files('gallery');
        return view('gallery', compact('images'));
    }

    public function upload(Request $request)
    {
        $validated = $request->validate([
            'fileImage' => 'required|image',
        ]);

        Storage::disk('vultr')->putFile('gallery', $validated['fileImage'], 'public');

        return redirect('/gallery');
    }
}
