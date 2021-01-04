<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Rizky Septiawan',
            'email' => 'rizseptiawan@gmail.com',
            'username' => 'rizsep98',
            'password' => bcrypt('secret')
        ]);
        $user->assignRole('Admin');
        $user2 = User::create([
            'name' => 'Ervian Akbarsyah',
            'email' => 'ervian2017@gmail.com',
            'username' => 'ervian2017',
            'password' => bcrypt('secret')
        ]);
        $user2->staff()->create([
            'staff_division_id' => 1,
            'identity_number' => '172410101075',
            'name' => 'Ervian Akbarsyah',
            'start_period' => '2020-06-01',
            'end_period' => '2021-06-01',
        ]);
        $user2->assignRole('Assistant');
        $user3 = User::create([
            'name' => 'M Naufal Haffiyan',
            'email' => 'naufal@gmail.com',
            'username' => 'naufal2017',
            'password' => bcrypt('secret')
        ]);
        $user3->student()->create([
            'nim' => '182410101075',
        ]);
        $user3->assignRole('Student');

    }
}
