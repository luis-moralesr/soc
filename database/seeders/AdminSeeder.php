<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        if (!User::where('email', 'luis@gmail.com')->exists()) {
            User::create([
                'name' => 'Luis Ángel',
                'email' => 'luis@gmail.com',
                'password' => Hash::make('asesores'),
                'rol'=>'admin',
            ]);


            // User::create([
            //     'name' => 'Luis Ángel',
            //     'lastName' => 'Morales Romero',
            //     'email' => 'luis@gmail.com',
            //     'company' => 'SOC Asesores',
            //     'state' => 'Mexico',
            //     'password' => Hash::make('asesores'),
            //     'rol' => 'admin',
            // ]);

        }
    }
}
