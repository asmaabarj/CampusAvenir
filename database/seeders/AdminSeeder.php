<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nom' => 'Admin',
            'prenom'=> 'admin',
            'email' => 'admin@example.com',
            'tele'=>'0000000000',
            'password' => Hash::make('password'),
            'adresse'=> 'test test',
            'role'=>'admin',
        ]);
    }
}
