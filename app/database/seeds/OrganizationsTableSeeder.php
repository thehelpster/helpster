<?php

class OrganizationsTableSeeder extends Seeder {

    public function run()
    {
        $organization = new Organization;
        $organization->name = 'Helpster';
        $organization->date_established = '2015-02-24';
        $organization->description = 'Helpster is a site dedicated to link volunteer organizations to prospecting volunteers';
        $organization->website = 'http://helpster.site';
        $organization->image = 'helpster.png';
        $organization->user_id = 4;

        $organization->save();

    }
}