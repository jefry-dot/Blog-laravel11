<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name"=> "Salomo Jefry",
            'username' => 'Sjefry',
            "email"=> "Sjefryip0519@gmail.com",
            'email_verified_at' => now(),
            'password'=> Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);
        
        User::factory(5)->create();
    }
}
