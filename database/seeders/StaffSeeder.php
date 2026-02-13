<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Staff;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
    $staffMembers = [
        [
            'first_name' => 'Grace',
            'last_name' => 'Wanjiru',
            'position' => 'Head Teacher',
            'department' => 'Administration',
            'bio' => 'A passionate faith-based educator committed to measurable academic excellence and character development.',
            'qualifications' => 'B.Ed (Education Management)',
            'years_of_experience' => 12,
            'is_leadership' => true,
            'is_active' => true,
            'display_order' => 1,
        ],
        [
            'first_name' => 'Samuel',
            'last_name' => 'Otieno',
            'position' => 'Mathematics Teacher',
            'department' => 'Academics',
            'bio' => 'Focused on building strong analytical skills and consistent academic performance.',
            'qualifications' => 'B.Sc Mathematics, PGDE',
            'years_of_experience' => 7,
            'is_leadership' => false,
            'is_active' => true,
            'display_order' => 2,
        ],
        [
            'first_name' => 'Mary',
            'last_name' => 'Njeri',
            'position' => 'English Teacher',
            'department' => 'Academics',
            'bio' => 'Dedicated to nurturing confident communicators grounded in faith and integrity.',
            'qualifications' => 'B.A English & Literature',
            'years_of_experience' => 6,
            'is_leadership' => false,
            'is_active' => true,
            'display_order' => 3,
        ],
    ];

    foreach ($staffMembers as $member) {
        Staff::create($member);
    }
}

}