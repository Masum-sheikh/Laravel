<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\author_request;
use App\Models\blog_user;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    function requestForAuthor(){
        return view("blog.authorRequest");
    } // End Method
    function requestForAuthorData(Request $request)
    {
        $request->validate([
            "email" => "required|email|unique:author_requests",
        ]);

        if(blog_user::where("email", $request->email)->exists()){
            // Data Insert
            author_request::insert([
                "author_id" => Auth::guard("author")->user()->id,
                "email" => $request->email,
                "created_at" => Carbon::now(),
            ]);
            return back()->with("Done", "Request Sent. Wait for Admin approval.");
        }else{
            return back()->with("Invalid", "You are not a User. For sign up");
        }
    }
}
