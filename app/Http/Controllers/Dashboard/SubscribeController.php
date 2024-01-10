<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Mail\NewsLetter;
use App\Models\subscribe;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class SubscribeController extends Controller
{
    function subscribe(Request $request)
    {
        // $request->validate([
        //     "email" => "required|email"
        // ]); // How to show custom message


        if($request->email == null){
            return redirect(url()->previous().'#subscribe')->with("error", "Please enter an email.");
        }else{
            if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)){
                return redirect(url()->previous().'#subscribe')->with("error", "Please enter a valid email.");
            }else{
                if(subscribe::where("email", $request->email)->exists()){
                    $email = $request->email;
                    $existsEmail = subscribe::where("email", $email)->first();

                    subscribe::find($existsEmail->id)->increment("totalSubscribe", 1);
                    // subscribe::where("email", $existsEmail)->increment("email", 1);
                    return redirect(url()->previous().'#subscribe')->with("exists", "Thank you! Already subscribed.");
                }else{
                    subscribe::insert([
                        "email" =>$request->email,
                        "totalSubscribe" => 1,
                        "created_at" => Carbon::now()
                    ]);
                    return redirect(url()->previous().'#subscribe')->with("done", "Thank you! Subscribe successfully.");
                }

            }
        }
    } // End Method

    function subscribers()
    {
        $subscribers = subscribe::all();
        return view("dashboard.subscribers", [
            "subscribers" => $subscribers
        ]);
    } // End Method
    function sendNewsLetter($id){
        $subscriber = subscribe::find($id);
        $subscriberMail = $subscriber->email;

        Mail::to($subscriberMail)->send(new NewsLetter($subscriberMail));
        return back()->with("sent", "Email sent {$subscriberMail}.");

    }

    }
