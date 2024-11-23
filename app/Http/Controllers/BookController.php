<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the books available, also filtered by the categories and search text if available.
     */
    public function displayBooks(Request $request)
    {
        $query = Book::query();

        if ($request->filled('search')) {
            $search = $request->search;
            
            $query->where('name', 'like', "%{$search}%")
            ->orWhere('publisher', 'like', "%{$search}%")
            ->orWhere('author', 'like', "%{$search}%")
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
     * Display a listing of the books that has been borrowed by the user, also filtered by the categories and search text if available.
     */
    public function displayBorrowedBooks(Request $request)
    {
        $books = Book::where('borrower_id', '=', Auth::id())->get();

        return view('books.my-books', [     
            'title'=>'My Books',
            'books' => $books,
            'categories' => Category::all()
        ]);
    }

    /**
     * Display the specified book.
     */
    public function displayBookDetail(Request $request)
    {
        return view('books.book-detail', [     
            'title'=>'Book',
            'book' => Book::findOrFail($request->id)
        ]);
    }

    /**
     * Update the specified book's borrower_id to user_id to indicate that the book is currently borrowed
     */
    public function borrowBook(Request $request)
    {
        $book = Book::findOrFail($request->book_id);

        $book->borrower_id = Auth::id();

        $book->save();

        return redirect("/book/" . $request->book_id);
    }

    /**
     * Update the specified book's borrower_id to null to indicate that the book has been returned and is ready to be borrowed
     */
    public function returnBook(Request $request)
    {
        $book = Book::findOrFail($request->book_id);

        $book->borrower_id = null;

        $book->save();

        return redirect("/book/" . $request->book_id);
    }
}
