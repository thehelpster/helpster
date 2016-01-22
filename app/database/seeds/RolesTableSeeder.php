<?php

class RolesTableSeeder extends Seeder {

	public function run()
	{
		$role = new Role;
		$role->name = 'site_admin';
		$role->display_name = 'Site Administrator';
		$role->description = 'Site Admin will have access to monitor/access/change all activity for organizations and volunteers';
		$role->save();

		$role2 = new Role;
		$role2->name = 'org_admin';
		$role2->display_name = 'Organization Admin';
		$role2->description = 'Org Admin will be able to create/edit/delete their events as well as edit their information pages';
		$role2->save();

		$role3 = new Role;
		$role3->name = 'volunteer';
		$role3->display_name = 'Volunteer';
		$role->description = 'Volunteers will have access to view and attend events and also edit their own info pages.';
		$role->save();
	}
}