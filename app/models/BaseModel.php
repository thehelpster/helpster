<?php

use Carbon\Carbon;

class BaseModel extends Eloquent
{

	// public $now = Carbon::now('America/Chicago');

	// public $today = Carbon::today();	

	public function getCreatedAtAttribute($value)
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    	return $utc->setTimezone('America/Chicago');
	}

	public function getUpdatedAtAttribute($value)
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
		return $utc->setTimezone('America/Chicago');
	}	

}