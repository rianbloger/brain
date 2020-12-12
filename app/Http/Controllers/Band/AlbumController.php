<?php

namespace App\Http\Controllers\Band;

use App\Http\Controllers\Controller;
use App\Models\{Album, Band};
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AlbumController extends Controller
{
    public function create()
    {
        return view('albums.create', [
            'title' => 'New Albume',
            'bands' => Band::get(),
            'submitLabel' => 'Create',
            'album' => new Album
        ]);
    }

    public function store()
    {
        request()->validate([
            'name' => 'required|unique:albums',
            'year' => 'required',
            'band' => 'required',

        ]);

        $band = Band::find(request('band'));

        Album::create([
            'name' => request('name'),
            'slug' => Str::slug(request('name')),
            'band_id' => request('band'),
            'year' => request('year')
        ]);

        return back()->with('status', 'Album wa created into ' . $band->name);
    }

    public function table()
    {
        return view('albums.table', [
            'albums' => Album::paginate(16),
            'title' => "Albums"
        ]);
    }

    public function edit(Album $album)
    {
        return view('albums.edit', [
            'title' => 'Edit album: ' . $album->name,
            'album' => $album,
            'bands' => Band::get(),
            'submitLabel' => 'Update'
        ]);
    }

    public function update(Album $album)
    {
        request()->validate([
            'name' => 'required|unique:albums,name,' . $album->id,
            'year' => 'required',
            'band' => 'required',

        ]);

        $album->update([
            'name' => request('name'),
            'slug' => Str::slug(request('name')),
            'band_id' => request('band'),
            'year' => request('year')
        ]);
        return redirect()->route('albums.table')->with('status', 'Album was updated');
    }
}
