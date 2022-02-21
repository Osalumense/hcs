<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
            [
                'first_name' => 'Admin',
                'last_name' => '',
                'gender' => '10',
                'patient_id' => '',
                'staff_id' => '',
                'email' => 'admin@hcs.com',
                'password' => Hash::make('AdminHCS'),
                'remember_token' => null,
                'type' => '30',
                'mobile_number' => null,
            ],

            [
                'first_name' => 'Counsellor 1',
                'last_name' => '',
                'gender' => '10',
                'patient_id' => '',
                'staff_id' => '',
                'email' => 'counsellor@hcs.com',
                'password' => Hash::make('Counsellor1HCS'),
                'remember_token' => null,
                'type' => '20',
                'mobile_number' => null,
            ],

            [
                'first_name' => 'User 1',
                'last_name' => '',
                'gender' => '10',
                'patient_id' => '',
                'staff_id' => '',
                'email' => 'user@gmail.com',
                'password' => Hash::make('User1'),
                'remember_token' => null,
                'type' => '10',
                'mobile_number' => null,
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
