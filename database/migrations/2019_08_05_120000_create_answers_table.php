<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('content', 1000);
            $table->integer('score')->default('0');
            $table->unsignedBigInteger('publisher_id');
            $table->unsignedBigInteger('question_id');
            $table->timestamps();
        });

        // Schema::table('answers', function (Blueprint $table) {
        //     $table->foreign('question_id')->references('id')->on('questions');
        //     $table->foreign('publisher_id')->references('id')->on('users');
        // });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
