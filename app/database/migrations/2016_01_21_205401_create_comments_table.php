<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table){
			$table->integer('user_id')->unsigned(); //user id assigned to the user when they comment
			$table->integer('event_id')->unsigned(); //event id, assigns the comment to the event
			$table->text('comment');

			$table->foreign('user_id')->references('id')->on('users')
				->onUpdate('cascade')->onDelete('cascade'); //references the user id from the id on the users table
			$table->foreign('event_id')->references('id')->on('events')
				->onUpdate('cascade')->onDelete('cascade'); //references the event id from the id on the events table
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comments', function(Blueprint $table){
			$table->dropForeign('comments_event_id_foreign');
			$table->dropForeign('comments_user_id_foreign');
		}); //drops the foreign keys
		Schema::drop('comments'); //drops the comments table
	}

}
