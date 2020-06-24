<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChassisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chassis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('bays');
            $table->boolean('is_lander');
            $table->boolean('is_system');
            $table->boolean('is_galactic');
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
        Schema::dropIfExists('chassis');
    }
}
