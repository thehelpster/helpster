<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
		$this->call('RolesTableSeeder');
		$this->call('RolesUsersTableSeeder');
		$this->call('OrganizationsTableSeeder');
		$this->call('EventsTableSeeder');
		$this->call('CommentsTableSeeder');
		$this->call('RsvpsTableSeeder');

	}

}
