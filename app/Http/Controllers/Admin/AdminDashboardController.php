<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\ContactMessage;

class AdminDashboardController extends Controller
{

    public function index()
    {
        return view('admin.dashboard', [
            'staffCount' => Staff::count(),
            'unreadMessages' => ContactMessage::where('is_read', false)->count(),
        ]);
    }
}

