<?php

class Comment extends BaseModel
{
	protected $table = 'comments';

	protected $fillable = array('comment');

	public static $rules = array(
		'comment' => 'required|min:10'
 
	);

	// public function VolunteerEvent()
	// {
	// 	return $this->belongsTo('VolunteerEvent');
	// }

}