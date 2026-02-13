<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        // Leadership staff (headteacher etc.)
        $leadership = Staff::where('is_leadership', true)
            ->where('is_active', true)
            ->orderBy('display_order')
            ->get();

        // Limit teachers to 9 (so total with leadership ≈ 10)
        $teachers = Staff::where('is_leadership', false)
            ->where('is_active', true)
            ->orderBy('display_order')
            ->take(9)
            ->get();

        return view('pages.staff', compact('leadership', 'teachers'));
    }

    /**
     * Show paginated list of all active staff members.
     */
    public function allstaff()
    {
        $staff = Staff::where('is_active', true)
            ->orderBy('is_leadership', 'desc')
            ->orderBy('display_order')
            ->paginate(20);

        return view('pages.staff-all', compact('staff'));
    }
}


