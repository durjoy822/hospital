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
        Schema::create('carousels', function (Blueprint $table) {
            $table->id();
            $table->string('heading')->nullable();
            $table->string('title');
            $table->string('details',2000);
            $table->string('icon')->nullable();
            $table->string('btnOne_name')->nullable();
            $table->string('btnOne_link')->nullable();
            $table->string('btnTwo_name')->nullable();
            $table->string('btnTwo_link')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('carousels');
    }
};
