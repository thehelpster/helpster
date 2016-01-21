<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendanceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attendance', function($table){
			$table->integer('user_id')->unsigned();
			$table->integer('event_id')->unsigned();
			$table->string('response', 1); //volunteers response to event ('Y'es, 'N'o, 'M'aybe);

			$table->foreign('user_id')->references('id')->on('users')
				->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('event_id')->references('id')->on('events')
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
		Schema::table('attendance', function(Blueprint $table){
			$table->dropForeign('attendance_event_id_foreign');
			$table->dropForeign('attendance_user_id_foreign');
		});
		Schema::drop('attendance');
	}

}
