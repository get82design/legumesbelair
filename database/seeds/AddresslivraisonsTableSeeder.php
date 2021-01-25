<?php

use Illuminate\Database\Seeder;
use App\Models\Addresslivraison;

class AddresslivraisonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Addresslivraison::create([
            'numrue' => 2784,
            'rue' => 'chemin de Vinche',
            'postal' => 82440,
            'ville' => 'Réalville',
            'user_id' => 1,
        ]);
    }
}
