<?php

class RsvpsTableSeeder extends Seeder
{
	public function run()
	{
		$rsvp = new Rsvp();
		$rsvp->user_id = '1'; //user of id 1 aka Roger
		$rsvp->event_id = '1'; //event of id 1 aka Codeup For Humanity Demo Day
		$rsvp->response = 'y'; // Y for attending

		$rsvp->save();

		$rsvp2 = new Rsvp();
		$rsvp2->user_id = '2';
		$rsvp2->event_id = '1';
		$rsvp2->response = 'y';
		$rsvp2->save();

		$rsvp3 = new Rsvp();
		$rsvp3->user_id = '3';
		$rsvp3->event_id = '1';
		$rsvp3->response = 'y';
		$rsvp3->save();

	}
}	