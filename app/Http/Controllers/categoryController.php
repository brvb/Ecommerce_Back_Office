<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function indexCreate()
    {
        return view('category.create-category');
    }
    public function index()
    {
        return view('category.index');
    }
}
