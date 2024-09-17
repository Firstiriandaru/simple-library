<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('index', compact('books'));
    }

    public function form()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'page_count' => 'required',
            'author_name' => 'required',
            'author_email' => 'required'
        ]);

        $book = Book::create($request->all());
        return redirect()->route('book');
    }
}
