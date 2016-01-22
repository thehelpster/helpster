<?php

class Organization extends BaseModel
{
	protected $table = 'organizations';



	protected $fillable = array('name', 'date_established', 'description', 'website', 'image');

	public static $rules = array(
		'name' => 'required|min:10|max:255',
		'date_established' => 'required|before:' .strtotime($this->today),
		'description' => 'required|min:7',
		'website' => 'required|min:10|url|active_url',
		'image' => 'required|image'

	);

	public function user()
	{
		return $this->belongsTo('User');
	}
}