<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AddressfacturesTableSeeder::class);
        $this->call(AddresslivraisonsTableSeeder::class);
        $this->call(ProduitsTableSeeder::class);
        $this->call(ImgproduitsTableSeeder::class);
    }
}
