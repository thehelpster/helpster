<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;
use Bbatsche\Entrust\Contracts\EntrustUserInterface;
use Bbatsche\Entrust\Traits\EntrustUserTrait;

class User extends Eloquent implements ConfideUserInterface, EntrustUserInterface {

	use ConfideUser;
	use EntrustUserTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $fillable = array('email', 'password', 'first_name', 'last_name', 'birthday', 'zip', 'gender', 'image');

	public static $rules = array(

		'email' => 'required|email|unique:users',
		'username' => 'unique:users',
		'password'   => '
                required|
                min:6|
                confirmed',
        'password_confirmation' => 'required|same:password',
		// 'first_name' => 'required|min:2|max:100',
		// 'last_name' => 'required|min:2|max:100',
		// 'birthday' => 'required',
		// 'zip' => 'required|max:5',
		// 'gender' => 'max:1',
		// 'image' => 'image'
	);

	public static $updateRules = array(
		'first_name' => 'required|min:2|max:100',
		'last_name' => 'required|min:2|max:100',
		'birthday' => 'required',
		'zip' => 'required|max:5',
		'gender' => 'max:1',
		'quote' => 'min:5|max:255',
		'image' => 'image'
	);

	public static $loginRules = array(
		'email' => 'required|email',
		'password' => 'required|min:6'
	);

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function organizations()
	{
		return $this->hasMany('Organization');
	}

	public function comments()
	{
		return $this->hasMany('Comment');
	}

	public function rsvps()
	{
		return $this->belongsToMany('VolunteerEvent', 'rsvps');
	}

	public function roles()
	{
		return $this->belongsToMany('Role');
	}

}
