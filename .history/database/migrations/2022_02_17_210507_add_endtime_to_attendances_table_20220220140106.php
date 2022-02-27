<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEndtimeToAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attendances', function (Blueprint $table) {
            $table->timestamp('end-time')->nullable(false);
        });

        Schema::create('rests', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->timestamp('start_time');
            $table->foreignId('attendance_id')->unsigned()->constrained('attendance');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendances', function (Blueprint $table) {
            //
        });
    }
}
