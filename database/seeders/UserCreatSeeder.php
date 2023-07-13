<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserCreatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'John',
                'email' =>'superadmin@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 1

            ],
            [
                'name' => 'John',
                'email' =>'admin@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 2

            ],
            [
                'name' => 'John',
                'email' =>'teacher@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 3

            ],
            [
                'name' => 'John',
                'email' =>'scout@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 4

            ],
            [
                'name' => 'John',
                'email' =>'student@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 5

            ],
            [
                'name' => 'John',
                'email' =>'user@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 6

            ],

        ];
        foreach ($users as $users){
        User::create($users);
        }
    }
}
