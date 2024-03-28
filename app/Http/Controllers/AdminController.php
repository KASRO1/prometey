<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function auth($token)
    {
        if(env("AUTH_TOKEN") !== $token){
            return redirect("/");
        }
        session(["auth_token" => $token]);
        return redirect()->route("admin.settings");
    }
}
