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
        $data = [
            'name' => 'Admin',
            'level' => 0,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
        ];
        User::create($data);

        $data = [
            'name' => 'Super Admin',
            'level' => 1,
            'email' => 'sadmin@gmail.com',
            'password' => Hash::make('123'),
        ];
        User::create($data);
    }
}
