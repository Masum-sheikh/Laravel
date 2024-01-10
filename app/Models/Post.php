<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\blog_user;

class Post extends Model
{
    protected $guarded = ["id"];
    use HasFactory;

    function relToCategory()
    {
        return $this->belongsTo(Category::class, "categoryId");
    }

    function relToAuth(){
        return $this->belongsTo(blog_user::class, "authorId");
    }
}
