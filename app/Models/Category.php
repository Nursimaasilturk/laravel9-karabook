<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    #many-to-one
    public function book()
    {
        return $this->hasMany(Book::class);
    }
}
