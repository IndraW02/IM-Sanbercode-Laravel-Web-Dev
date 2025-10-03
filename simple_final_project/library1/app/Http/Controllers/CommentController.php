<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Book $book)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        $user = $request->user(); // Ambil user login
        if (!$user) {
            return redirect()->route('login');
        }

        $book->comments()->create([
            'user_id' => $user->id,
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan.');
    }
}
