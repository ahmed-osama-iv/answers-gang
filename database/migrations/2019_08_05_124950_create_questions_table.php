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
            $table->string('content');
            $table->unsignedBigInteger('user_id')->nullable();
            #$table->unsignedBigInteger('group_id');
            #$table->unsignedBigInteger('bestanswer_id ')->nullable();
            $table->timestamps();
        });
/*
        Schema::table('questions', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('user');
        });
*/
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
