<?php


class SubadminController extends \BaseController
{
    protected $user;

    public function __construct(\Dlagos\Contracts\UserInterface $user)
    {
        $this->user = $user;
    }

    // Index View
    public function getIndex()
    {
        $users = $this->user->getAll();
        return View::make('admin.member.manage_subadmin', array(
            'users' => $users
        ));
    }
    // Get Subadmin Create
    public function getCreate()
    {
        $roles = $this->user->getAllRoles();

        $countries = \Config::get('static.countries');

        $cities = ['A'];

        $states = ['a'];

        return View::make('admin.member.add_subadmin', compact(
            'roles',
            'countries',
            'states',
            'cities'
        ));
    }

    // Post Subadmin post Create
    public function postCreate()
    {
        try {
            $validator = \App::make('Dlagos\Services\Validators\SubadminCreateValidator');

            if ($validator->with(Input::all())->passes()) {
                $this->subadmin->create(Input::all());
                return Redirect::to('admin/addsubadmin')->withSuccess('Successfully Created Record.');
            } else {
                return Redirect::to('admin/addsubadmin')->withInput()->withErrors($validator->errors());
            }
        }catch (Exception $e) {
            return Redirect::to('admin/addsubadmin')->withInput();
        }
    }

    public function getEdit($id)
    {
        $userProfile = \UserProfile::where('user_id', $id)->first();
        $user = \User::find($id);
        $roles = $this->user->getAllRoles();
        $roleIds = $user->role;

        $countries = \Config::get('static.countries');

        $cities = ['A'];

        $states = ['a'];

        return View::make('admin.member.edit_subadmin', compact(
            'roleIds',
            'user',
            'userProfile',
            'roles',
            'countries',
            'states',
            'cities'
        ));
    }

    public function postEdit()
    {

    }
}
