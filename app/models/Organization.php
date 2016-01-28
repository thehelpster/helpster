<?php

class Organization extends BaseModel
{
	protected $table = 'organizations';



	protected $fillable = array('name', 'date_established', 'description', 'website', 'image');

	public static $rules = array(
		'name' => 'required|min:10|max:255',
		'date_established' => 'required',
		'description' => 'required|min:7',
		'website' => 'required|min:10|url|active_url',
		'image' => 'required'

	);
	public static $editRules = array(
		'name' => 'required|min:5|max:255',
		'description' => 'required|min:7',
		'website' => 'required|min:10|url|active_url',
		'image' => 'required'
		);

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function events()
	{
		return $this->hasMany('VolunteerEvent');
	}

}