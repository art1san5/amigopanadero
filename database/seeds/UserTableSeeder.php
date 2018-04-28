<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            array(
                'name' => 'Administrator',
                'avatar' => 'users/avatar.png',
                'email' => 'admin@lafilgroup.com',
                'phone_number' => '09175699879',
                'age' => '25',
                'password' => Hash::make('password'),
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
        ]);
    }
}
