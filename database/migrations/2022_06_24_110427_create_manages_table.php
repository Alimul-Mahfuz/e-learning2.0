<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manages', function (Blueprint $table) {
            $table->id('manage_id');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('instractor_id');
            $table->foreign('course_id')->references('course_id')->on('courses');
            $table->foreign('instractor_id')->references('instractor_id')->on('instractors');
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
        Schema::dropIfExists('manages');
    }
};
