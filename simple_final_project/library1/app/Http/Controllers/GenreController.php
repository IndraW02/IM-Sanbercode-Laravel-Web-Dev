<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // Tampilkan semua genre
    public function index()
    {
        $genres = Genre::all();
        return view('genres.index', compact('genres'));
    }

    // Tampilkan form untuk buat genre baru
    public function create()
    {
        return view('genres.create');
    }

    // Simpan genre baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Genre::create([
            'name' => $request->name
        ]);

        return redirect()->route('genres.index')->with('success', 'Genre berhasil ditambahkan.');
    }

    // Tampilkan detail genre (opsional, biasanya tidak terlalu dibutuhkan)
    public function show(string $id)
    {
        $genre = Genre::findOrFail($id);
        return view('genres.show', compact('genre'));
    }

    // Tampilkan form edit genre
    public function edit(string $id)
    {
        $genre = Genre::findOrFail($id);
        return view('genres.edit', compact('genre'));
    }

    // Update genre
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre = Genre::findOrFail($id);
        $genre->update(['name' => $request->name]);

        return redirect()->route('genres.index')->with('success', 'Genre berhasil diperbarui.');
    }

    // Hapus genre
    public function destroy(string $id)
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();

        return redirect()->route('genres.index')->with('success', 'Genre berhasil dihapus.');
    }
}
