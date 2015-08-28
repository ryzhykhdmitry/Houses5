<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Projects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('title', 30);
            $table -> float('levels');
            $table -> float('building_area');
            $table -> string('lot_dem');
            $table -> float('building_height');
            $table -> integer('roof_angle');
            $table -> string('garage');
            $table -> string('inhabitants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');
    }
}
