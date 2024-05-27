<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class CreateCategoryController extends Controller
{
    public function index()
    {
        return view('category.create-category');
    }
}
