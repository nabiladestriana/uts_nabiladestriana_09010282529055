<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Menampilkan daftar buku.
     */
    public function index(Request $request)
{
    $search = $request->input('search');

    $books = Book::with('category')
        ->when($search, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                      ->orWhere('author', 'like', '%' . $search . '%');
            });
        })
        ->latest()
        ->get();

    return view('books.index', compact('books', 'search'));
}

    /**
     * Menampilkan form tambah buku.
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();

        return view('books.create', compact('categories'));
    }

    /**
     * Menyimpan buku baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => ['required', 'exists:categories,id'],
            'title' => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:255'],
            'publisher' => ['required', 'string', 'max:255'],
            'year' => ['required', 'integer', 'digits:4'],
            'stock' => ['required', 'integer', 'min:0'],
        ]);

        Book::create($validated);

        return redirect()->route('books.index');
    }

    /**
     * Menampilkan detail buku.
     */
    public function show(Book $book)
    {
        $book->load('category');

        return view('books.show', compact('book'));
    }

    /**
     * Menampilkan form edit buku.
     */
    public function edit(Book $book)
    {
        $categories = Category::orderBy('name')->get();

        return view('books.edit', compact('book', 'categories'));
    }

    /**
     * Memperbarui data buku.
     */
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'category_id' => ['required', 'exists:categories,id'],
            'title' => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:255'],
            'publisher' => ['required', 'string', 'max:255'],
            'year' => ['required', 'integer', 'digits:4'],
            'stock' => ['required', 'integer', 'min:0'],
        ]);

        $book->update($validated);

        return redirect()->route('books.index');
    }

    /**
     * Menghapus buku.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index');
    }
}