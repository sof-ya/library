<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Writer extends Model
{
    use HasFactory;

    public function books(): BelongsToMany {
        return $this->belongsToMany(Book::class, "books_writers");
    }
}
