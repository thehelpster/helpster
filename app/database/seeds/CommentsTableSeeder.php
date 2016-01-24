<?php

class commentsTableSeeder extends Seeder 
{
	public function run()
	{
		$comment = new Comment();
		$comment->user_id = '1'; //user of id 1 aka roger
		$comment->event_id = '1'; //event of id 1 on events aka Codeup of Humanity Demo Day
		$comment->comment = 'What will the Codeup students be doing at this event?'; //the comment text associated to the user and the event

		$comment->save();

	}
}