<?php namespace Dlagos\Services\Validators;


class SubadminCreateValidator extends abstractValidator
{

    protected $rules = array(
        'first_name' => 'required',
        'last_name'  => 'required',
        'username'   => 'required|unique:user,username',
        'password'   => 'required|min:8',
        'phone'      => 'required|numeric',
        'mobile'     => 'required|numeric',
        'country'    => 'required',
        'state'      => 'required',
        'city'       => 'required',
        'roles'      => 'sometimes|required',
        'email'      => 'required|email|unique:user,email'
    );
}