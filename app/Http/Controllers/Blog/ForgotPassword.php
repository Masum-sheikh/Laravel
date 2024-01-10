<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use App\Models\blog_user;
use App\Models\forgotPassword as ModelsForgotPassword;
use App\Notifications\forgotPassword as NotificationsForgotPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;


class ForgotPassword extends Controller
{
    function forgotPassword()
    {
        return view("blog.passwordRecovery");
    } // End Method
    function forgotPasswordEmail(Request $request)
    {
        $request->validate([
            "email" => "required|email",
        ]);

        if(blog_user::where("email", $request->email)->exists()){
            $user = blog_user::where("email", $request->email)->first();

            ModelsForgotPassword::where("userId", $user->id)->delete();
            $userInfo = ModelsForgotPassword::create([
            "userId" => $user->id,
            "token" => uniqid(),
            ]);
            Notification::send($user, new NotificationsForgotPassword($userInfo));
            return back()->with("sent", "Sent password reset link in your email.");

        }else{
            return back()->with("invalid", "Email doesn't exists.");
        }


        // if(blog_user::where('email', $request->email)->exists()){
        //     if(Auth::guard("author")->attempt(["email" => $request->email, "password" => $request->password])){
        //         return redirect()->route("blogHome");

        //     }else{
        //         return back()->with("Wrong", "Wrong password.");
        //     }
        // }else{
        //     return back()->with("Invalid", "Invalid email address.");
        // }
    } // End Method

    function forgotPasswordForm($token)
    {
        if(ModelsForgotPassword::where("token", $token)->exists()){
            return view("blog.forgotPasswordForm", [
                "token" => $token,
            ]);
        }else{
            return redirect()->route("forgotPassword")->with("invalidLink", "Invalid Link.");
        }
    } // End Method

    function resetPasswordData(Request $request, $token){
        $request->validate([
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
        ]);

        $user = ModelsForgotPassword::where("token", $token)->first();
        blog_user::where("id", $user->userId)->update([
            "password" => bcrypt($request->password),
        ]);
        ModelsForgotPassword::find($user->id)->delete();
        return redirect()->route("blogSignIn")->with("reset", "Password reset successfully. You can login.");
    }
}
