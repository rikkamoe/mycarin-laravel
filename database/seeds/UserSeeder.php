<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'name' => 'Rikka',
            'email' => 'rikka@gmail.com',
            'password' => Hash::make('1234567890'),
            'created_at' => '2021-07-05 12:31:36',
            'updated_at' => '2021-07-05 12:31:36'
        ]);
        DB::table('users')->insert([
            'name' => 'Yutta',
            'email' => 'yutta@gmail.com',
            'password' => Hash::make('1234567890'),
            'status' => '0',
            'created_at' => '2021-07-05 12:31:36',
            'updated_at' => '2021-07-05 12:31:36'
        ]);
    }
}
