<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        "book_cover",
        "name",
        "description",
        "author",
        "publisher",
        "published_year",
        "isbn",
        "borrower_id",
        "status"
    ];
    
    public function categories(){
        return $this->belongsToMany(Category::class, 'book_categories', 'book_id', 'category_id');
    }
    
    public function borrower(){
        return $this->belongsTo(User::class, 'borrower_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($book) {
            if ($book->book_cover) {
                \Storage::disk('public')->delete($book->book_cover);
            }
        });
    }
}
