<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('books', [
            'title' => 'Book',
            'books' => Book::with(['user', 'category'])->latest()->paginate(8),
        ]);
    }

    public function show(Book $book)
    {
        return view('show', [
            'title' => 'Details',
            'book' => $book,
        ]);
    }
}
