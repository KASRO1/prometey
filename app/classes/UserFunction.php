<?php

namespace App\classes;

class UserFunction
{

    public function checkAccess($user_id)
    {
        $user = User::find($user_id);


    }
}
