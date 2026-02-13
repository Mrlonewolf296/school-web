<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'position',
        'department',
        'photo',
        'bio',
        'qualifications',
        'years_of_experience',
        'is_leadership',
        'is_active',
        'display_order'
    ];

    public function allstaff()
    {
        // Paginate all active staff (including leadership)
        $staff = self::where('is_active', true)
            ->orderBy('is_leadership', 'desc') // leadership first
            ->orderBy('display_order')
            ->paginate(20); // 20 per page

        return view('pages.staff-all', compact('staff'));
    }
}


