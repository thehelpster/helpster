<?php

class OrganizationsTableSeeder extends Seeder {

    public function run()
    {
        $organization = new Organization;
        $organization->name = 'Codeup';
        $organization->date_established = '2013-05-19';
        $organization->description = 'Codeup offers elite learn to code bootcamps in San Antonio, Texas.';
        $organization->website = 'http://codeup.com';
        $organization->confirmed = 1;

        $organization->save();
    }
}