<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'genre_id', 'cover_image'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
