<?php

class EventsTableSeeder extends Seeder {

    public function run()
    {
        $event = new Event;
        $event->name = 'Codeup for Humanity Demo Day';
        $event->date = '2016-01-21';
        $event->location = 'The Vogue Building';
        $event->description = 'This is a day where all Codeup student\'s will voluntarily demo anything that they want.';
        $event->volunteers_needed = '100';
        $event->signup_deadline = '2016-01-19';

        $event->save();
    }
}