<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'excerpt',
        'category',
        'image'
    ];

    // Add this if you want to use published scope
    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at');
    }
}