<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=User::create([
            'name' => "Perviz",
            'lname' => "Əliyev",
            'email' => "admin@gmail.com",
            'email_verified_at' => now(),
            'password' => Hash::make('123'), // password
            'remember_token' => Str::random(10),
        ]);

        $admin->assignRole('admin');


      
    }
}
