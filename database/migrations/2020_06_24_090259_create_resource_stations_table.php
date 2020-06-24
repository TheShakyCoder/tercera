<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourceStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources_stations', function (Blueprint $table) {
            $table->id();
            $table->integer('resource_id');
            $table->integer('station_id');
            $table->integer('quantity')->default(1);
            $table->timestamps();
            $table->unique(['resource_id', 'station_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resources_stations');
    }
}
