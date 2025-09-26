<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Genre extends Model
{
    use HasFactory; // 👈 opsional tapi direkomendasikan

    // 👇 WAJIB: izinkan kolom ini diisi via mass assignment
    protected $fillable = [
        'name',
        'description'
    ];

    // Relasi ke Book
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}