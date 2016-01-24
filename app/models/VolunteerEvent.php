<?php

class VolunteerEvent extends BaseModel
{
	protected $table = 'events';

	protected $fillable = array('name', 'event_date', 'location', 'description', 'volunteers_needed', 'signup_deadline');

	public static $rules = array(
		'name' => 'required|min:10|max:255',
		'event_date' => 'required',
		'location' => 'required|min:7',
		'description' => 'required|min:10',
		'volunteers_needed' => 'required',
		'signup_deadline' => 'required'

	);

	public function organization()
	{
		return $this->belongsTo('Organization');
	}

	public function comments()
	{
		return $this->hasMany('Comment');
	}

	public function rsvps()
	{
		return $this->belongsToMany('User', 'rsvps');
	}
}