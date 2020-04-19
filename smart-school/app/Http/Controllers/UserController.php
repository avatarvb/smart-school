<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //permissionDenied
    public function permissionDenied()
    {
        return view('msg.not-admin');
    }
}
