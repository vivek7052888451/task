<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         User::create([

            'name' => "Sudha",
            'email' => "anil@gmail.com",
            'password' => Hash::make('password'), // password
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
