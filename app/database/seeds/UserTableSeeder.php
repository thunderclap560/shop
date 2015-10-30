<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'firstname' => 'Nguyễn',
        'lastname' => 'Tuấn',
        'email'    => 'admin@gmail.com',
        'password' => Hash::make('123456'),
    ));
}

}