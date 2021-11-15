<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\VideoGame;
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
        
        VideoGame::create(
            [
                "title" => "FIFA",
                "developer" => "EA",
                "category" => "Deporte",
                "price" => "60000",
                "saleStock" => "30",
                "rentStock" => "25",
                "keywords" => "Futbol Multijugador",
                "image" => "1632723390.webp",
            ]
        );

        VideoGame::create(
            [
                "title" => "Epic Mickey",
                "developer" => "Disney",
                "category" => "Fantasia",
                "price" => "40000",
                "saleStock" => "48",
                "rentStock" => "23",
                "keywords" => "Disney Magia Niños",
                "image" => "1632748585.jpg",
            ]
        );

        VideoGame::create(
            [
                "title" => "Rocket League",
                "developer" => "Psyonix",
                "category" => "Carros",
                "price" => "90000",
                "saleStock" => "23",
                "rentStock" => "12",
                "keywords" => "Futbol Multijugador",
                "image" => "1632748964.webp",
            ]
        );

        VideoGame::create(
            [
                "title" => "Mario Kart 8",
                "developer" => "Nintendo",
                "category" => "Carreras",
                "price" => "70000",
                "saleStock" => "32",
                "rentStock" => "12",
                "keywords" => "Mario Multijugador Familia",
                "image" => "1632752292.jpg",
            ]
        );

        VideoGame::create(
            [
                "title" => "Need for Speed Rivals",
                "developer" => "EA",
                "category" => "Carreras",
                "price" => "30000",
                "saleStock" => "32",
                "rentStock" => "12",
                "keywords" => "Carros Policia",
                "image" => "1632810114.jpg",
            ]
        );

        VideoGame::create(
            [
                "title" => "Zelda Breath of the Wild",
                "developer" => "Nintendo",
                "category" => "Fantasia",
                "price" => "100000",
                "saleStock" => "32",
                "rentStock" => "12",
                "keywords" => "Magia Mundo Animales",
                "image" => "1632810284.jpg",
            ]
        );
    }
}
