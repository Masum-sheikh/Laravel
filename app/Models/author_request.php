<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\blog_user;

class author_request extends Model
{
    protected $guarded = ["id"];
    use HasFactory;

    function relToBlogUser(){
        return $this->belongsTo(blog_user::class, "author_id");
    }
}
