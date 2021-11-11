<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { 
        $user = User::where('email', "davidepik777@gmail.com")->first();
        if($user == null) {
            User::firstOrCreate(
                [
                    "name" => "David",
                    "address" => "Calle 20 sur",
                    "email" => "davidepik777@gmail.com",
                    "password" => Hash::make("12345678"),
                    "admin" => "1",
                ]
            );
        }
    }
}
