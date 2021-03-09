<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alexandre',
            'email' => 'alexandre@gmail.com',
            'password' => Hash::make('123456')
        ]);

        User::create([
            'name' => 'Nicolás',
            'email' => 'nicolas@gmail.com',
            'password' => Hash::make('123456')
        ]);
    }
}
