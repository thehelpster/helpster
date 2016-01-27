<?php

class RolesTableSeeder extends Seeder {

	public function run()
	{
		$owner = new Role;
		$owner->name = 'Owner';
		$owner->display_name = 'Site Owner';
		$owner->description = 'Site Owner will have access to monitor/access/change all activity for organizations and volunteers';
		$owner->save();

		$admin = new Role;
		$admin->name = 'admin';
		$admin->display_name = 'Organization Admin';
		$admin->description = 'Org Admin will be able to create/edit/delete their events as well as edit their information pages';
		$admin->save();

		$volunteer = new Role;
		$volunteer->name = 'volunteer';
		$volunteer->display_name = 'Volunteer';
		$volunteer->description = 'Volunteers will have access to view and attend events and also edit their own info pages.';
		$volunteer->save();
	}
}