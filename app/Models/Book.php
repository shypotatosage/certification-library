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
        "primary_author",
        "publisher",
        "published_year",
        "loanee_id",
        "status"
    ];
    
    public function categories(){
        return $this->belongsToMany(Category::class, 'book_categories', 'book_id', 'category_id');
    }
    
    public function loanee(){
        return $this->belongsTo(User::class, 'loanee_id');
    }
}
