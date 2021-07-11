<?php

namespace App\Models;

use App\Models\Model;


class UsersModel extends Model
{
    public function __construct()
    {
        $this->table = 'users';
    }


}


