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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('details');
            $table->string('time');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('link_one');
            $table->string('link_two');
            $table->string('link_three');
            $table->string('link_four');
            $table->string('link_five');
            $table->string('phone');
            $table->string('email');
            $table->string('copyright');
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
        Schema::dropIfExists('settings');
    }
};
