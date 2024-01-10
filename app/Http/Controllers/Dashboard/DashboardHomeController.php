<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardHomeController extends Controller
{
    function dashboardHome()
    {
        return view("dashboard.index");
    }
}
