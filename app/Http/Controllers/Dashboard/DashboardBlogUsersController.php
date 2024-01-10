<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\blog_user;
use Illuminate\Http\Request;

class DashboardBlogUsersController extends Controller
{
    function blogUserList()
    {
        $users = blog_user::all();
        return view("dashboard.blogUser", compact("users"));
    } // End Function
    function blogUserDelete($id)
    {
        blog_user::find($id)->delete();
        return back()->with("Deleted", "Deleted.");
    } // End Function
}
