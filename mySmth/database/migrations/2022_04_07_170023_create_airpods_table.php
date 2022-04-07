<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airpods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('condition');
            $table->decimal('cost');
            $table->integer('amount');
            $table->string('namePicture');
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
        Schema::dropIfExists('airpods');
    }
};
