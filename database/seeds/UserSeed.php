<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create([
            'name' => 'Test Person',
            'email' => 'test@test.com',
            'password' => bcrypt('password')
        ]);
    }
}
