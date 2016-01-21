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
			$table->increments('org_id');
			$table->string('name', 250);
			$table->date('date_established');
			$table->text('description');
			$table->string('website');	
			$table->string('image')->nullable();
			$table->timestamps();

			$table->foreign('org_id')->references('id')->on('users')
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
		Schema::table('organizations', function(Blueprint $table){
			$table->dropForeign('organizations_org_id_foreign');
		});
		Schema::drop('organizations');
	}

}
