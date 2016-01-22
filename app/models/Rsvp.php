<?php

class Attendance extends BaseModel
{
	protected $table = 'attendances';

	protected $fillable = array('response');

	public static $rules = array(
		//user id required
		//event id required
	);

	

}