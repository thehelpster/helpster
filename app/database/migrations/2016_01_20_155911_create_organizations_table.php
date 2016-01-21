<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('organizations', function($table){
			$table->increments('id'); //id for organizations
			$table->string('name', 250); //name of the organization
			$table->date('date_established'); //established date of the org
			$table->text('description'); //description of the org
			$table->string('website');	//org's website
			$table->string('image')->nullable(); //org image
			$table->integer('user_id')->unsigned(); //will be used to associate the org admin to the org
			$table->timestamps(); // for created at and updated at

			//foreign key to associate the user with role of org admin to the organization
			$table->foreign('user_id')->references('id')->on('users')
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
		//drop foreign key before dropping the table
		Schema::table('organizations', function(Blueprint $table){
			$table->dropForeign('organizations_user_id_foreign');
		});
		//drop the table
		Schema::drop('organizations');
	}

}
