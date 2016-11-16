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
        Faker\Factory::create();
        // create users
        User::create([
            'full_name' => 'Super Administrator',
            'email' => 'superadmin@news.app',
            'password' => bcrypt('secret1234'),
            'remember_token' => str_random(10)]);
    }
}
