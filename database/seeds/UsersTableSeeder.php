<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'System Admin',
            'email' => 'mostak.shahid@gmail.com',
            'password' => bcrypt('123456789'),
            'role_id' => 1,
            'is_active' => 1
        ]);
    }
}
