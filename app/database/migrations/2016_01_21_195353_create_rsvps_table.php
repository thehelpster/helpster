<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//Attendance table to keep track of which volunteers are attending which events
class CreateRsvpsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rsvps', function($table){
			$table->integer('user_id')->unsigned(); //creates a user id where they will get the id from the user
			$table->integer('event_id')->unsigned(); //creates a event id where it will be associated to that event
			$table->timestamps();
			$table->string('response', 1); //volunteers response to event ('Y'es, 'N'o, 'M'aybe);

			$table->foreign('user_id')->references('id')->on('users')
				->onUpdate('cascade')->onDelete('cascade'); //foreign key where the user id will associate itself to the id of the user
			$table->foreign('event_id')->references('id')->on('events')
				->onUpdate('cascade')->onDelete('cascade');	//foreign key where the event id will be associated to the event 
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rsvps', function(Blueprint $table){
			$table->dropForeign('rsvps_event_id_foreign');
			$table->dropForeign('rsvps_user_id_foreign');
		}); //drops the foreign keys before the table
		Schema::drop('rsvps'); //drops the attendance table
	}

}
