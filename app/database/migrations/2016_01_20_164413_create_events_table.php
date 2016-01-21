<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function($table){
			$table->increments('event_id');
			$table->integer('org_id')->unsigned();
			$table->string('name'); //name of the event
			$table->date('event_date'); //the actual date of the event
			$table->string('location'); //location of the event. Name of location or address
			$table->text('description'); //description of the event
			$table->integer('volunteers_needed'); //number of volunteers needed
			$table->date('signup_deadline'); //deadline for volunteers to sign up
			$table->timestamps(); //will generate the created at and updated at columns

			$table->foreign('org_id')->references('id')->on('organizations')
				->onUpdate('cascade')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{	
		Schema::table('events', function(Blueprint $table){
			$table->dropForeign('events_event_id_foreign');
		});
		Schema::drop('events');
	}

}
