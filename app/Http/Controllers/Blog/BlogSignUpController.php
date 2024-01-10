<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\blog_user;
use App\Models\mailVerify;
use App\Notifications\MailVerifyNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class BlogSignUpController extends Controller
{
    function blogSignUp()
    {
        return view("blog.signup");
    } // End Method
    function blogSignUpData(Request $request)
    {
        $request->validate([
            "name" => "required|string|min:4|max:255",
            "username" => "required|string|min:8|max:15|unique:blog_users",
            "email" => "required|email|unique:blog_users",
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
        ]);


        // Data Insert
        $userInfo = blog_user::create([
            "name" => $request->name,
            "username" => $request->username,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "created_at" => Carbon::now(),
        ]);

        $userToken = mailVerify::create([
            "blogUserId" => $userInfo->id,
            "token" => uniqid(),
            "created_at" => Carbon::now(),
        ]);

        Notification::send($userInfo, new MailVerifyNotification($userToken));

        return back()->with("Done", "Sign Up Success! We have sent verify link on your mail address. Please verify first.");
    } //End Method

    function verifyMail($token){

        if(mailVerify::where("token", $token)->exists()){

            $user = mailVerify::where("token", $token)->first();

            blog_user::where("id", $user->blogUserId)->update([
                "verified_at" => Carbon::now(),
            ]);

            mailVerify::find($user->id)->delete();
            return redirect()->route("blogSignIn")->with("Verified", "Verified successfully. You can login.");

        }else{
            return redirect()->route("blogSignUp")->with("invalidLink", "Invalid Link.");
        }






    }
}
