<?php namespace Dlagos\Repos;

use Dlagos\Contracts\SubadminInterface;
use Illuminate\Support\Facades\Hash;
use User;
use UserProfile;

class EloquentSubadminRepository implements SubadminInterface
{
    /**
     * TODO : Refactoring required.
     * @param $data
     * @return mixed
     */
    public function create($data)
    {

        $user = new User();
        $user->username = $data['username'];
        $user->password = Hash::make($data['password']);
        $user->email = $data['email'];
        $user->type = 'subadmin';
        $user->activation_code = '';
        $user->activated = 1;
        $user->status = 'active';
        $user->save();

        //sync the roles

        $user->role()->sync($data['roles']);

        // create the user profile.
        $profile = new UserProfile();
        $profile->first_name = $data['first_name'];
        $profile->last_name = $data['last_name'];
        $profile->mobile = $data['mobile'];
        $profile->phone = $data['phone'];
        $profile->address = $data['address'];
        $profile->city = $data['city'];
        $profile->state = $data['state'];
        $profile->user_id = $user->id;
        $profile->save();

        return $user;
    }

    /**
     * TODO : Refactoring required.
     * @param $data
     * @param $id
     */
    public function update($data, $id)
    {
        $user = \User::findOrFail($id);

        //sync roles
        $user->role()->sync($data['roles']);

        // Update User
        $user->update($data);

        // Update Profile
        $user->profile->update($data);

        // If password is being updated
        if (isset($data['password'])) {
            $user->password = Hash::make($data['password']);
            $user->save();
        }

    }

}