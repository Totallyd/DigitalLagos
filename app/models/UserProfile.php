<?php


class UserProfile extends Eloquent
{
	protected $table = 'user_profile';

	protected $key = 'id';

	protected $fillable = array(
		'first_name', 'last_name', 'mobile', 'phone', 'address', 'city', 'state'
	);

	public function user() {
		return $this->belongsTo('User');
	}

}
