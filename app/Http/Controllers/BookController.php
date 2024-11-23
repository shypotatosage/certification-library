<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the books available, also filtering the categories and search text if available.
     */
    public function displayBooks(Request $request)
    {
        $query = Book::query();

        if ($request->filled('search')) {
            $search = $request->search;
            
            $query->where('name', 'like', "%{$search}%")
            ->orWhere('publisher', 'like', "%{$search}%")
            ->orWhere('primary_author', 'like', "%{$search}%")
            ->orWhere('published_year', 'like', "%{$search}%");
        }

        if ($request->filled('category')) {
            $category = $request->category;

            $query->whereHas('categories', function ($q) use ($category) {
                $q->where('name', $category);
            });
        }

        $books = $query->get();

        return view('home', [     
            'title'=>'Books',
            'books' => $books,
            'categories' => Category::all()
        ]);
    }
    /**
     * Display a listing of the books available, also filtering the categories and search text if available.
     */
    public function displayBorrowedBooks(Request $request)
    {
        $books = Book::where('loanee_id', '=', Auth::id())->get();

        return view('my-books', [     
            'title'=>'My Books',
            'books' => $books,
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
