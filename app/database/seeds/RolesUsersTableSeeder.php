<?php

class RolesUsersTableSeeder extends Seeder {
	public function run()
	{
		$roleuser = new RolesUser;
		$roleuser->user_id = '1';
		$roleuser->role_id = '1';
		$roleuser->save();

		//assigning Jerald the role of 1 which is 'owner'
		$jerald = new RolesUser;
		$jerald->user_id = '2'; 
		$jerald->role_id = '1';
		$jerald->save();

		//assigning Sakib the role of 1 which is 'owner'
		$sakib = new RolesUser;
		$sakib->user_id = '3';
		$sakib->role_id = '1';
		$sakib->save();

		//assigning $testAdmin the role of 2 which is 'admin'
		$testAdmin = new RolesUser;
		$testAdmin->user_id = '4';
		$testAdmin->role_id = '2';
		$testAdmin->save();

		//assigning $testVolunteer the role of 3 which is 'volunteer'
		$testVolunteer = new RolesUser;
		$testVolunteer->user_id = '5';
		$testVolunteer->role_id = '3';
		$testVolunteer->save();
	}
}