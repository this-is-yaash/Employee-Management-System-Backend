<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade
use Illuminate\Support\Facades\Hash;
use League\CommonMark\Extension\Table\Table;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin')
        ]);
    }
}
