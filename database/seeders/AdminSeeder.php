<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Admins')->insert([
            'name' => 'Md Mazharul Islam',
            'email' => 'eng.mazharul2@gmail.com',
            'phone' => '01716448668',
            'password' => Hash::make('12345678'),
            'image' => 'public/admin/images/user/1693154716748686.jpg',
        ]);
    }
}
