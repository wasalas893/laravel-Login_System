<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquen\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()

    {
     factory(App\User::class,10)->create();
    }

}
