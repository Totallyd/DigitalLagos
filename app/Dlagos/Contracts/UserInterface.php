<?php

namespace Dlagos\Contracts;

/**
 * Interface UserInterface
 * @package Dlagos\Contracts
 */
interface UserInterface {

    /**
     * Register New User
     * @return mixed
     */
    public function register($user_data);

}