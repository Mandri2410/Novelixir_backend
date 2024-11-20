<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'cover_url', 'chapters'];

    protected $casts = [
        'chapters' => 'array', // Ensure chapters are stored as an array
    ];
}
