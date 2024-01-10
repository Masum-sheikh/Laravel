<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class popularPost extends Model
{

    protected $guarded = ["id"];
    use HasFactory;

    function relationtoPost(){
        return $this->belongsTo(Post::class, "postId");
    }
}
