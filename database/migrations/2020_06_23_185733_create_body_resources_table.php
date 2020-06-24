<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodyResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bodies_resources', function (Blueprint $table) {
            $table->id();
            $table->integer('body_id');
            $table->integer('resource_id');
            $table->integer('quantity')->default(2);
            $table->timestamps();
            $table->unique(['body_id', 'resource_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bodies_resources');
    }
}
