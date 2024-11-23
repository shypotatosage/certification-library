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
        "borrower_id",
        "status"
    ];
    
    public function categories(){
        return $this->belongsToMany(Category::class, 'book_categories', 'book_id', 'category_id');
    }
    
    public function borrower(){
        return $this->belongsTo(User::class, 'borrower_id');
    }
}
