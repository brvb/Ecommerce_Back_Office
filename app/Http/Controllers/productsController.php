<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class productsController extends Controller
{
    public function indexCreate()
    {
        return view('products.create-product');
    }
    public function index()
    {
        return view('products.index');
    }
}