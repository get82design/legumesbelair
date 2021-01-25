<?php

use Illuminate\Database\Seeder;
use App\Models\Addressfacture;

class AddressfacturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Addressfacture::create([
            'name' => 'Get82Design',
            'numrue' => 2784,
            'rue' => 'chemin de Vinche',
            'postal' => 82440,
            'ville' => 'Réalville',
            'user_id' => 1,
        ]);
    }
}
