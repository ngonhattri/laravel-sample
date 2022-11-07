<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'ユーザー1',
            'email' => 'nhattri1503@gmail.com',
            'password' => '123456',
        ]);
        User::create([
            'name' => 'ユーザー2',
            'email' => 'nhattri1503@gmail.com.jp',
            'password' => '123456',
        ]);
        User::create([
            'name' => 'ユーザー3',
            'email' => 'nhattri1503@gmail.com.vn',
            'password' => '123456',
        ]);
        User::create([
            'name' => 'ユーザー4',
            'email' => 'kd1360631@st.kobedenshi.ac.jp',
            'password' => '123456',
        ]);
    }
}
