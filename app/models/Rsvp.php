<?php

class Rsvp extends BaseModel
{
	protected $table = 'rsvps';

	protected $fillable = array('response');

	public static $rules = array(
		//user id required
		//event id required
	);

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function event()
	{
		return $this->belongsTo('Event');
	}

}