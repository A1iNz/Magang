<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = [
            [
                'username'=>'staff',
                'name'=>'Staff HelpDesk',
                'email'=>'Staff@gmail.com',
                'level'=>'staff',
                'password'=>Hash::make('123456')
            ],
            [
                'username'=>'programmer',
                'name'=>'Programmer',
                'email'=>'programmer@gmail.com',
                'level'=>'programmer',
                'password'=>Hash::make('123456')
            ],
            [
                'username'=>'hardware',
                'name'=>'hardware',
                'email'=>'hardware@gmail.com',
                'level'=>'hardware',
                'password'=>Hash::make('123456')
            ],
            [
                'username'=>'analis',
                'name'=>'analis',
                'email'=>'analis@gmail.com',
                'level'=>'analis',
                'password'=>Hash::make('123456')
            ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}