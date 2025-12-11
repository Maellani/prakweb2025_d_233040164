<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'slug', 'body'];

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

public function category()
{
    retun $this->belongTo(Category::class);
}

//Relasi belongTo untuk User (author)
public function author()
{
    return $this->belongsTo(User::class, 'user_id');
}

//Tetap ada untuk backward compatibility
public function user()
{
    return $this->belongsTo(User::class);
}