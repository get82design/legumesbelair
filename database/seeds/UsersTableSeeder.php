<?php

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'Angles',
            'firstname' => 'Benoit',
            'phone' => '0681834817',
            'email' => 'get82design@gmail.com',
            'newuser' => 'no',
            'role' => 'admin',
            'password' => bcrypt('Hiphop82'),
        ]);
        User::create([
            'name' => 'Martinasso',
            'firstname' => 'Olivier',
            'phone' => '0605115223',
            'email' => 'legumesdebelair@gmail.com',
            'newuser' => 'no',
            'role' => 'admin',
            'password' => bcrypt('22451990'),
        ]);
    }
}
