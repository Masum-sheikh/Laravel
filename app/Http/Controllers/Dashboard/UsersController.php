<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    function users()
    {
        $users = User::all();
        return view("dashboard.users1", compact("users"));
    }
    function profile()
    {
        return view("dashboard.profile");
    }
}
