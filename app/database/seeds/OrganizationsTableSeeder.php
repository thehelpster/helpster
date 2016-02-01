<?php

class OrganizationsTableSeeder extends Seeder {

    public function run()
    {
        $organization = new Organization;
        $organization->name = 'Codeup';
        $organization->date_established = '2013-05-19';
        $organization->description = 'Codeup offers elite learn to code bootcamps in San Antonio, Texas.';
        $organization->website = 'http://codeup.com';
        $organization->image = 'codeup.png';
        $organization->user_id = 4;

        $organization->save();

        $organization1 = new Organization;
        $organization1->name = 'Help To Give';
        $organization1->date_established = '2011-03-29';
        $organization1->description = 'Help To Give is dedicated to lend a helping hand to those in need';
        $organization1->website = 'http://wwww.helptogive.com';
        $organization1->image = 'helptogive.jpg';
        $organization1->user_id = 6;

        $organization1->save();

        $organization2 = new Organization;
        $organization2->name = 'Schrute Beet Farms';
        $organization2->date_established = '2001-06-15';
        $organization2->description = 'The Schrute Beet Farms family is dedicated to give back to the community. Anyone in the community is welcome to share our passion for giving back.';
        $organization2->website = 'http://www.justbeetit.com';
        $organization2->image = 'schrute.jpg';
        $organization2->user_id = 9;

        $organization2->save();

        $organization3 = new Organization;
        $organization3->name = 'The Simpsons';
        $organization3->date_established = '1995-09-15';
        $organization3->description = 'The Simpsons are dedicated to give back to the community with humor and laughter';
        $organization3->website = 'http://www.simpsonsdoitbest.com';
        $organization3->image = 'simpsons.jpg';
        $organization3->user_id = 5;

        $organization3->save();

        $organization4 = new Organization;
        $organization4->name = 'Castillo and Co.';
        $organization4->date_established = '2001-06-15';
        $organization4->description = 'Founded by Isaac Castillo. Castillo and Co plan on using Helpster to find more helpers for their volunteering events.';
        $organization4->website = 'http://www.justbeetit.com';
        $organization4->image = 'isaac.jpg';
        $organization4->user_id = 10;

        $organization4->save();

        $organization5 = new Organization;
        $organization5->name = 'Apple Organization';
        $organization5->date_established = '2001-06-15';
        $organization5->description = 'Apple. That is all.';
        $organization5->website = 'http://www.apple.com';
        $organization5->image = 'apple.jpeg';
        $organization5->user_id = 11;

        $organization5->save();

        $organization6 = new Organization;
        $organization6->name = 'Bic Organization';
        $organization6->date_established = '2001-06-15';
        $organization6->description = 'The Bic Organization wants to give back';
        $organization6->website = 'http://www.bic.com';
        $organization6->image = 'bicboy.png';
        $organization6->user_id = 12;

        $organization6->save();

        $organization7 = new Organization;
        $organization7->name = 'Sharpie Organization';
        $organization7->date_established = '2001-06-15';
        $organization7->description = 'We are Sharpie. Help us help you make your mark.';
        $organization7->website = 'http://www.sharpie.com';
        $organization7->image = 'sharpie.jpg';
        $organization7->user_id = 13;

        $organization7->save();

    }
}