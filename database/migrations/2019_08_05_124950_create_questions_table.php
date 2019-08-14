<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('content', 1000);
            $table->integer('score')->default('0');
            $table->unsignedBigInteger('publisher_id');
            $table->unsignedBigInteger('group_id')->nullable();
            //$table->unsignedBigInteger('bestanswer_id')->nullable();
            $table->timestamps();
        });

        // Schema::table('questions', function (Blueprint $table) {
        //     $table->foreign('publisher_id')->references('id')->on('users');
        //     $table->foreign('bestanswer_id')->references('id')->on('answers');
        // });
        Schema::table('questions', function (Blueprint $table) {
            $table->softDeletes();
        });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
