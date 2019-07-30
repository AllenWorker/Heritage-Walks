<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateStops extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stops', function (Blueprint $table) {
            $table->text('short_desc')->change();
            $table->text('full_desc')->change();
            $table->string('img')->default('default.jpg');
            $table->string('audio')->default('default.mp3');
            $table->string('street_location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stops', function (Blueprint $table) {
            $table->dropIfExists('short_desc');
            $table->dropIfExists('full_desc');
            $table->dropIfExists('img');
            $table->dropIfExists('audio');
            $table->dropIfExists('street_location');
        });
    }
}
