<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Staff;

class StaffPhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $map = [
            ['first_name' => 'Grace', 'last_name' => 'Wanjiru', 'photo' => 'staff/gracewanjiru.jpg'],
            ['first_name' => 'Samuel', 'last_name' => 'Otieno', 'photo' => 'staff/samuelotieno.jpg'],
            ['first_name' => 'Mary',  'last_name' => 'Njeri',   'photo' => 'staff/marynjeri.jpg'],
        ];

        foreach ($map as $m) {
            Staff::where('first_name', $m['first_name'])
                ->where('last_name', $m['last_name'])
                ->update(['photo' => $m['photo']]);
        }
    }
}
