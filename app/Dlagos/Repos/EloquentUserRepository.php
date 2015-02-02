<?php

namespace Dlagos\Repos;

use Dlagos\Contracts\UserInterface;

class EloquentUserRepository implements UserInterface
{
    /**
     * Register New User
     * @return mixed
     */
    public function register($user_data)
    {
        $code = str_random(60);

        $user = new User;
        $user->email = Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        $user->type = 'Member';
        $user->status = '0';
        $user->activation_code = $code;
        $user->activated = '0';
        $user->save();

        // create new product and save it
        $userProfile = new UserProfile;
        $userProfile->first_name = Input::get('first_name');
        $userProfile->last_name = Input::get('last_name');
        $userProfile->role = Input::get('role');
        $userProfile->job_title = Input::get('job_title');
        $userProfile->mobile = Input::get('mobile');
        $userProfile->phone = Input::get('phone');
        $userProfile->address = Input::get('address');
        $userProfile->city = Input::get('city');
        $userProfile->state = Input::get('state');
        $userProfile->user()->associate($user);
        $userProfile->save();
    }

}