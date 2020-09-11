<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('track_points', function (Blueprint $table) {
            $table->id();
            $table->decimal('latitude', 32, 28);
            $table->decimal('longitude', 32, 28);
            $table->integer('altitude');
            $table->dateTimeTz('time', 0);
            $table->decimal('temperature', 6, 2);
            $table->integer('heart_rate');
            $table->integer('cadence');
            $table->bigInteger('track_segment_id')->unsigned();
            $table->foreign('track_segment_id')->on('track_segments')->references('id')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('track_points');
    }
}
