<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\StaffDivision;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisions = [
            [
                'division_name' => 'Asisten Penelitian',
            ],
            [
                'division_name' => 'Asisten Praktikum',
            ],
            [
                'division_name' => 'Tim Produk',
            ],
            [
                'division_name' => 'Tim Lomba',
            ],
        ];
        foreach ($divisions as $division) {
            # code...
            $stafDivision = StaffDivision::create($division);
        }
    }
}
