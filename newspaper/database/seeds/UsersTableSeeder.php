<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => str_random(15),
        //     'email' => str_random(15).'@gmail.com',
        //     'password' => bcrypt('secret')
        // ]);
        factory(User::class, 19)->create();

    }
}