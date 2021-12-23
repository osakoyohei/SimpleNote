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
            [
                'name' => 'ゲスト',
                'email' => 'guest@guest.jp',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'test1',
                'email' => 'test1@test.com',
                'password' => Hash::make('password'),
            ],
        ]);
    }
}
