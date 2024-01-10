<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\blog_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogSignInController extends Controller
{
    function blogSignIn()
    {
        return view("blog.signin");
    } // End Method
    
    function blogSignInData(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if (blog_user::where('email', $request->email)->exists()) {
            if (Auth::guard("author")->attempt(["email" => $request->email, "password" => $request->password])) {

                if (Auth::guard("author")->user()->verified_at == null) {
                    Auth::guard("author")->logout();
                    return back()->with("notVerified", "Please verify first.");
                } else {
                    return redirect()->route("blogHome");
                }
            } else {
                return back()->with("Wrong", "Wrong password.");
            }
        } else {
            return back()->with("Invalid", "Invalid email address.");
        }
    }
}
