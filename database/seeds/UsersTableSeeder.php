<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            User::create([
                'name' => 'wasala',
                'email' => 'sunanda@gmail.com',
                'password' => Hash::make('sunanda'),
                'remember_token' => str_random(10),
            ]);
    }
}
