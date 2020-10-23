<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackSegmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('track_segments', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128)->nullable();
            $table->string('color', 20)->nullable();
            $table->bigInteger('track_id')->unsigned();
            $table->foreign('track_id')->on('tracks')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('track_segments');
    }
}
