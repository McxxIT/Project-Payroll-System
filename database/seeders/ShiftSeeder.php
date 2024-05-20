<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shift;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $shifts = [
            ['workshift_id' => 1, 'shift_start' => '07:00:00', 'shift_end' => '15:00:00'],
            ['workshift_id' => 2, 'shift_start' => '15:00:00', 'shift_end' => '23:00:00'],
            ['workshift_id' => 3, 'shift_start' => '23:00:00', 'shift_end' => '07:00:00'],
        ];
        

        foreach ($shifts as $shiftData) {
            Shift::create($shiftData);
        }
    }
}
