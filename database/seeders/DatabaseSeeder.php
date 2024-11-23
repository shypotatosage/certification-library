<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Book;
use App\Models\Category;
use App\Models\BookCategory;
use App\Models\BookLoan;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory()->count(10)->create();
        $books = Book::factory()->count(5)->create();
        $categories = Category::factory()->count(3)->create();
    
        // Assign categories to books
        foreach ($books as $book) {
            BookCategory::factory()->count(2)->create(['book_id' => $book->id]);
        }
    }
}
