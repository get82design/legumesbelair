<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressfacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addressfactures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumInteger('numrue')->nullable();
            $table->string('rue');
            $table->mediumInteger('postal');
            $table->string('ville');
            $table->string('name')->nullable();
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
        Schema::dropIfExists('addressfactures');
    }
}
