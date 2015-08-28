<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table   ->  increments('id');
            $table   ->  string('facebook_id', 50);
            $table   ->  integer('twitter_id');
            $table   ->  string('email')->unique();
            $table   ->  integer('active');
            $table   ->  integer('permissions');
            $table   ->  string('username', 30);
            $table   ->  string('password', 60);
            $table   ->  string('password_temp', 60);
            $table   ->  string('activation_code', 60);
            $table   ->  rememberToken();
            $table   ->  timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
