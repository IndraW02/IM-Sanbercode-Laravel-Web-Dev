<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Tampilkan semua buku
    public function index()
    {
        $books = Book::with('genre')->get();
        return view('books.index', compact('books'));
    }

    // Tampilkan form untuk membuat buku baru
    public function create()
    {
        $genres = Genre::all();
        return view('books.create', compact('genres'));
    }

   // Simpan buku baru
public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'genre_id' => 'required|exists:genres,id',
        'description' => 'nullable|string',
        'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = $request->only(['title', 'genre_id', 'description']);

    // Upload cover image jika ada
    if ($request->hasFile('cover_image')) {
        $path = $request->file('cover_image')->store('uploads', 'public');
        $data['cover_image'] = $path;
    }

    Book::create($data);

    return redirect()->route('books.index')->with('success', 'Book berhasil ditambahkan.');
}

    // Tampilkan detail buku
    public function show(string $id)
    {
        $book = Book::with('genre', 'comments.user')->findOrFail($id);
        return view('books.show', compact('book'));
    }

    // Tampilkan form edit buku
    public function edit(string $id)
    {
        $book = Book::findOrFail($id);
        $genres = Genre::all();
        return view('books.edit', compact('book', 'genres'));
    }

    // Update buku
public function update(Request $request, string $id)
{
    $book = Book::findOrFail($id);

    $request->validate([
        'title' => 'required|string|max:255',
        'genre_id' => 'required|exists:genres,id',
        'description' => 'nullable|string',
        'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = $request->only(['title', 'genre_id', 'description']);

    // Upload cover image jika ada
    if ($request->hasFile('cover_image')) {
        $path = $request->file('cover_image')->store('uploads', 'public');
        $data['cover_image'] = $path;
    }

    $book->update($data);

    return redirect()->route('books.index')->with('success', 'Book berhasil diperbarui.');
}

    // Hapus buku
    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Book berhasil dihapus.');
    }
}
