<?php

class EventsTableSeeder extends Seeder {

    public function run()
    {
        $volunteerEvent = new VolunteerEvent;
        $volunteerEvent->name = 'Codeup for Humanity Demo Day';
        $volunteerEvent->event_date = '2016-01-21';
        $volunteerEvent->location = 'The Vogue Building';
        $volunteerEvent->description = 'This is a day where all Codeup student\'s will voluntarily demo anything that they want.';
        $volunteerEvent->volunteers_needed = '100';
        $volunteerEvent->signup_deadline = '2016-01-30';
        $volunteerEvent->org_id = 1;
        
        $volunteerEvent->save();

        $volunteerEvent2 = new VolunteerEvent;
        $volunteerEvent2->name = 'Refugee Helpster Day';
        $volunteerEvent2->event_date = '2016-01-21';
        $volunteerEvent2->location = 'The Vogue Building';
        $volunteerEvent2->description = 'This is a day where all Codeup student\'s will voluntarily demo anything that they want.';
        $volunteerEvent2->volunteers_needed = '100';
        $volunteerEvent2->signup_deadline = '2016-02-14';
        $volunteerEvent2->org_id = 1;
        
        $volunteerEvent2->save();

        $volunteerEvent3 = new VolunteerEvent;
        $volunteerEvent3->name = 'Helpster Help Day';
        $volunteerEvent3->event_date = '2016-01-21';
        $volunteerEvent3->location = 'The Vogue Building';
        $volunteerEvent3->description = 'This is a day where all Codeup student\'s will voluntarily demo anything that they want.';
        $volunteerEvent3->volunteers_needed = '100';
        $volunteerEvent3->signup_deadline = '2016-03-19';
        $volunteerEvent3->org_id = 2;
        
        $volunteerEvent3->save();

        $volunteerEvent4 = new VolunteerEvent;
        $volunteerEvent4->name = 'Soup Kitchen Helpster';
        $volunteerEvent4->event_date = '2016-01-21';
        $volunteerEvent4->location = 'The Vogue Building';
        $volunteerEvent4->description = 'This is a day where all Codeup student\'s will voluntarily demo anything that they want.';
        $volunteerEvent4->volunteers_needed = '100';
        $volunteerEvent4->signup_deadline = '2016-02-19';
        $volunteerEvent4->org_id = 7;
        
        $volunteerEvent4->save();

        $volunteerEvent5 = new VolunteerEvent;
        $volunteerEvent5->name = 'Litter Pick Up In The Park';
        $volunteerEvent5->event_date = '2016-01-21';
        $volunteerEvent5->location = 'The Vogue Building';
        $volunteerEvent5->description = 'This is a day where all Codeup student\'s will voluntarily demo anything that they want.';
        $volunteerEvent5->volunteers_needed = '100';
        $volunteerEvent5->signup_deadline = '2016-03-19';
        $volunteerEvent5->org_id = 8;
        
        $volunteerEvent5->save();
    }
}