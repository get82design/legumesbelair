<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddresslivraisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresslivraisons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumInteger('numrue');
            $table->string('rue');
            $table->mediumInteger('postal');
            $table->string('ville');
            $table->integer('user_id');
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
        Schema::dropIfExists('addresslivraisons');
    }
}
