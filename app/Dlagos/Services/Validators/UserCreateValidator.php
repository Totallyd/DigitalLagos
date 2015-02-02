<?php namespace Dlagos\Services\Validators;

use abstractValidator;

class UserCreateValidator extends abstractValidator
{

    protected $_rules = array(
      'first_name' => 'required'
    );
}