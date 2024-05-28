<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class usersController extends Controller
{
    public function index()
    {
        //dd("Controller");
        return view('users.index');
    }

    public function add()
    {
        //dd("Controller");
        return view('users.create-users');
    }
}
