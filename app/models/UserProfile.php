<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class UserProfile extends Eloquent
{

	protected $table = 'user_profile';

	protected $key = 'id';

	public function user() {
		return $this->belongsTo('User');
	}

}
