<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendListTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('friend_lists', function (Blueprint $table) {
			$table->charset = 'utf8';
			$table->collation = 'utf8_unicode_ci';
			$table->integer('user_id_1')->unsigned();
			$table->foreign('user_id_1')->references('id')->on('users')->onDelete('cascade');
			$table->integer('user_id_2')->unsigned();
			$table->foreign('user_id_2')->references('id')->on('users')->onDelete('cascade');
			$table->string('tag');
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
		Schema::dropIfExists('friend_lists');
	}
}
