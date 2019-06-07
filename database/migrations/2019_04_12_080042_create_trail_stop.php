<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrailStop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trail_stop', function (Blueprint $table) {
            $table->primary(['trail_id' ,'stop_id']);
            $table->unsignedInteger('trail_id');
            $table->unsignedInteger('stop_id');

         //  $table->foreign('trail_id')->references('id')->on('trails')->onDelete('cascade');
        // $table->foreign('stop_id')->references('id')->on('stops')->onDelete('cascade');

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
        Schema::dropIfExists('trail_stop');
    }
}
