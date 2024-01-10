<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\author_request;
use App\Models\blog_user;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardAuthorController extends Controller
{
    function authorList()
    {
        $authors = blog_user::where("authorStatus", 1)->get();
        return view("dashboard.authorList", compact("authors"));
    } // End Method
    function authorDeactive($id)
    {
        // Deactive
        blog_user::find($id)->update([
            "authorStatus"=> null,
            "authorDate" => null,
            "updated_at" => Carbon::now()
        ]);

        // Return to Author Requests
        $user = blog_user::find($id);
        author_request::insert([
            "author_id" => $user->id,
            "email" => $user->email,
            "created_at" => Carbon::now(),
        ]);


        return back();
    }

    function authorRequests()
    {
        $requests = author_request::all();
        return view("dashboard.authorRequests", [
            "requests" => $requests,
        ]);
    } // End Method

    function authorRequestApproved($id)
    {
        // Author Approved
        $user = author_request::find($id);

        blog_user::find($user->author_id)->update([
            "authorStatus" => 1,
            "authorDate" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        //Author Request Delete
        author_request::find($id)->delete();

        return back()->with("Updated", "Approved.");
    } // End Method
    function authorRequestDelete($id)
    {
        author_request::find($id)->delete();
        return back()->with("Deleted", "Request Deleted.");
    } // End Method
}
