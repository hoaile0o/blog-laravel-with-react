<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'id' => 24,
            'username' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => '1',
            'role' => 'user',
            'avartar' =>str_random(255),
        ]);
    }
}
