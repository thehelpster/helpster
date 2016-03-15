<?php

class EventsTableSeeder extends Seeder {

    public function run()
    {
        $volunteerEvent = new VolunteerEvent;
        $volunteerEvent->name = 'Helpster Kick-off';
        $volunteerEvent->event_date = '2016-03-21';
        $volunteerEvent->location = 'Helpster.site';
        $volunteerEvent->description = 'This is the first event for Helpster, help kick it off by inviting all your friends';
        $volunteerEvent->volunteers_needed = '100';
        $volunteerEvent->signup_deadline = '2016-03-21';
        $volunteerEvent->org_id = 1;
        
        $volunteerEvent->save();

    }
}