<?php

class RsvpsTableSeeder extends Seeder
{
	public function run()
	{
		$rsvp = new Rsvp;
		$rsvp->user_id = '1'; //user of id 1 aka Roger
		$rsvp->event_id = '1'; //event of id 1 aka Codeup For Humanity Demo Day
		$rsvp->response = 'y'; // Y for attending
		
		$rsvp->save();
	}
}