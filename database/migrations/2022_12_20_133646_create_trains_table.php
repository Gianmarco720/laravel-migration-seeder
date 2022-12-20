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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 150);
            $table->string('departure_station', 200);
            $table->string('arrival_station', 200);
            $table->time('departure_time', $precision = 2);
            $table->time('arrival_time', $precision = 2);
            $table->string('train_no');
            $table->integer('carriage_no')->nullable();
            $table->boolean('in_time')->nullable();
            $table->boolean('deleted')->nullable();
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
        Schema::dropIfExists('trains');
    }
};
