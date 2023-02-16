<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'employee_name' => 'Harry',
                'email'=>'harry@gmail.com',
                'designation' =>'Web Designer',
                'phone_number' => '1234567890',
                'salary' => '800000',
                'age' =>'23',
                'dob' => '13/12/2000'
            ]
            ];
            foreach ($data as $key => $value) {
                DB::table('user_info')->insert($value);
            }

    }
}
