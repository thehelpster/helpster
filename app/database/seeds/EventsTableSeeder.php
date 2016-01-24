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
        $volunteerEvent->signup_deadline = '2016-01-19';
        $volunteerEvent->org_id = 1;
        
        $volunteerEvent->save();
    }
}