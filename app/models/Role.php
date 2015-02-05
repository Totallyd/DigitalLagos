<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Role extends Eloquent {


	protected $table = 'role';

	protected $key = 'id';

	public function user()
	{
		return $this->belongsToMany('User', 'user_roles');
	}
}
