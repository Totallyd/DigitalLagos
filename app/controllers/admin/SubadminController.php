<?php


class SubadminController extends \BaseController
{

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
}
