<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class promotionsController extends Controller
{
    public function indexCreate()
    {
        return view('promotions.create-promotion');
    }
    public function index()
    {
        return view('promotions.index');
    }
}