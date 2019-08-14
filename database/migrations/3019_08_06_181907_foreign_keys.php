<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('groups', function (Blueprint $table) {
            $table->foreign('creator_id')->references('id')->on('users');
        });

        Schema::table('questions', function (Blueprint $table) {
            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('publisher_id')->references('id')->on('users');
            //$table->foreign('bestanswer_id')->references('id')->on('answers');
        });

        Schema::table('answers', function (Blueprint $table) {
            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('publisher_id')->references('id')->on('users');
        });

        Schema::table('group_user', function (Blueprint $table) {
            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('question_votes' , function(Blueprint $table){
            $table->foreign('post_id')->references('id')->on('questions');
            $table->foreign('voter_id')->references('id')->on('users');
        });

        Schema::table('answer_votes' , function(Blueprint $table){
            $table->foreign('answer_id')->references('id')->on('answers');
            $table->foreign('voter_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
