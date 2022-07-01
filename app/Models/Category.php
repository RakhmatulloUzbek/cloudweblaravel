<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // One to Many
    public function posts(){
        return $this->hasMany(Post::class);
    }

    // One to Many
    public function services(){
        return $this->hasMany(Post::class);
    }

    // One to Many
    public function children(){
        return $this->hasMany(Category::class, 'parent_id');
    }
}
