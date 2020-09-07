<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateWaypointsUserRel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('waypoints', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('waypoints', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign('waypoints_user_id_foreign');
            $table->dropColumn('user_id');
        });
    }
}
