<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'slug'];

    public function categories(): belongsToMany
    {
        return $this->belongsToMany(BlogCategory::class);
    }

    public function comments(): hasMany
    {
        return $this->hasMany(Comment::class);
    }
}
