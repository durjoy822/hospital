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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('pid');
            $table->string('patient_name');
            $table->string('department');
            $table->string('doctor');
            $table->string('admit')->nullable();
            $table->string('discharge')->nullable();
            $table->string('ammount')->nullable();
            $table->string('discount')->nullable();
            $table->string('type')->nullable();
            $table->string('type_info')->nullable();
            $table->string('paid')->nullable();
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
        Schema::dropIfExists('payments');
    }
};
