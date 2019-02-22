<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->char('team_name', 255)->nullable(false);
            $table->char('team_location', 255)->nullable(false);
            $table->char('team_sponsor', 255)->nullable();
            $table->char('team_arena', 255)->nullable();
            $table->integer('arena_capacity')->unsigned()->nullable();
            $table->date('year_founded')->nullable(false);
            $table->date('year_joined')->nullable(false);
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
        Schema::dropIfExists('teams');
    }
}
