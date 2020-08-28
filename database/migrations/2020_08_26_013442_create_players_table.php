<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('team_id')->nullable();
            $table->unsignedBigInteger('college_id')->nullable();
            $table->unsignedBigInteger('draft_year_id')->nullable();
            $table->unsignedBigInteger('draft_rank_id')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->date('birthday')->nullable();

            $table->string('name');
            $table->string('character')->nullable();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('college_id')->references('id')->on('colleges');
            $table->foreign('draft_year_id')->references('id')->on('draft_years');
            $table->foreign('draft_rank_id')->references('id')->on('draft_ranks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
