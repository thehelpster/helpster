<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OptionalUserFields extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::statement('ALTER TABLE `users` MODIFY `first_name` VARCHAR(100) NULL;');
		DB::statement('ALTER TABLE `users` MODIFY `last_name` VARCHAR(100) NULL;');
		DB::statement('ALTER TABLE `users` MODIFY `birthday` DATE NULL;');
		DB::statement('ALTER TABLE `users` MODIFY `zip` INT NULL;');

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement('ALTER TABLE `users` MODIFY `first_name` VARCHAR(100) NOT NULL;');
		DB::statement('ALTER TABLE `users` MODIFY `last_name` VARCHAR(100) NOT NULL;');
		DB::statement('ALTER TABLE `users` MODIFY `birthday` DATE NOT NULL;');
		DB::statement('ALTER TABLE `users` MODIFY `zip` INT NOT NULL;');
	}

}
