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
        $user = User::where('email', "admin@gmail.com")->first();
        if ($user == null) {
            User::firstOrCreate(
                [
                    "name" => "Admin",
                    "address" => "el cielo",
                    "email" => "admin@gmail.com",
                    "password" => Hash::make("12345678"),
                    "admin" => "1",
                ]
            );
        }
    }
}
