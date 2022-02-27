<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->time('work-hours')->nullable(false);
            $table->timestamp('start-time')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('end-time')->nullable(true);
            $table->foreignId('worker_id')->unsigned()->constrained('workers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}
