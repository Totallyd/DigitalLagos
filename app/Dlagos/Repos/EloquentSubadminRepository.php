<?php namespace Dlagos\Repos;

use Dlagos\Contracts\SubadminInterface;
use User;

class EloquentSubadminRepository implements SubadminInterface
{
    /**
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        $user = User::create($data);
    }

}