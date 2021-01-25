<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingcartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoppingcarts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->longText('content');
            $table->enum('livraison', ['yes', 'no'])->default('no');
            $table->enum('checkcommande', ['yes', 'no'])->default('no');
            $table->enum('checkreception', ['yes', 'no'])->default('no');
            $table->enum('day', ['Mercredi', 'Samedi']);
            $table->enum('hour', ['18h00', '18h30', '19h00', '19h30']);
            $table->enum('daylivr', ['Mardi', 'Jeudi']);
            $table->enum('daypro', ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche']);
            // $table->enum('hourlivr', ['18h00', '18h30', '19h00', '19h30']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shoppingcarts');
    }
}
