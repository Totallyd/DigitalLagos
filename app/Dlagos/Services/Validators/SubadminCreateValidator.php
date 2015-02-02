<?php namespace Dlagos\Services\Validators;

use abstractValidator;

class SubadminCreateValidator extends abstractValidator
{

    protected $_rules = array(
        'first_name' => 'required'
    );
}