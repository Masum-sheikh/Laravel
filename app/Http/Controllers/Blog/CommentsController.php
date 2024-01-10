<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;

class CommentsController extends Controller
{
    function commentData(Request $request)
    {
        Comment::insert([
            "userId" => Auth::guard('author')->id(),
            "postId" => $request->postId,
            "parentId" => $request->parentId,
            "comment" => $request->comment,
            "created_at" => Carbon::now(),
        ]);
        return back();
    }
}
