<?php
namespace App;

use App\Models\User;

class SelectBoxHelper
{
    /**
     * @return mixed
     */
    public static function userList()
    {
        return User::all()->pluck('name', 'id');
    }
}
