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

		$volunteer1 = new RolesUser;
		$volunteer1->user_id = '6';
		$volunteer1->role_id = '2';
		$volunteer1->save();

		$volunteer2 = new RolesUser;
		$volunteer2->user_id = '7';
		$volunteer2->role_id = '3';
		$volunteer2->save();

		$volunteer3 = new RolesUser;
		$volunteer3->user_id = '8';
		$volunteer3->role_id = '3';
		$volunteer3->save();

		$volunteer4 = new RolesUser;
		$volunteer4->user_id = '9';
		$volunteer4->role_id = '2';
		$volunteer4->save();

		$volunteer5 = new RolesUser;
		$volunteer5->user_id = '10';
		$volunteer5->role_id = '2';
		$volunteer5->save();

		$volunteer6 = new RolesUser;
		$volunteer6->user_id = '11';
		$volunteer6->role_id = '2';
		$volunteer6->save();

		$volunteer7 = new RolesUser;
		$volunteer7->user_id = '12';
		$volunteer7->role_id = '2';
		$volunteer7->save();

		$volunteer8 = new RolesUser;
		$volunteer8->user_id = '13';
		$volunteer8->role_id = '2';
		$volunteer8->save();

	}
}