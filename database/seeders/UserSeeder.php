<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Moammer Farshid Enan',
            'email' => 'emoammerfershid@gmail.com',
            'role' => 'is_enan',
            'password' => Hash::make('hello_enan_54'),
        ]);
    }
}
