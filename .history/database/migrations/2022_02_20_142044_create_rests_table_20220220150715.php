<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rests', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->foreignId('attendance_id')->unsigned()->constrained('attendances');
            $table->timestamp('start-time')->nullable(false);
            $table->timestamp('created_at')->useCurrent()->nullable(false);
            $table->timestamp('updated_at')->useCurrent()->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rests');
    }
}
