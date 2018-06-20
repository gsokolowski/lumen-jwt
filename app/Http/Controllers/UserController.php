<?php

namespace App\Http\Controllers;
use App\User;

use Laravel\Lumen\Routing\Controller as BaseController;

class UserController extends BaseController
{

    public function getAlUsers() {
        $users = User::all();
        return response()->json($users);
    }
}
