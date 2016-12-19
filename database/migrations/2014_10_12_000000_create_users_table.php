<?php

use Illuminate\Support\Facades\Schema;
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
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id');
            $table->string('name');
            $table->string('password');
            $table->string('company')->nullable();
            $table->string('phone')->nullable();
            $table->string('city')->nullable();
            $table->string('profolio')->nullable();
            $table->string('description')->nullable();
            $table->string('email')->unique();
            $table->integer('friend_request')->default(0);
            $table->integer('unread_personal_messages')->default(0);
            $table->integer('unread_group_messages')->default(0);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
