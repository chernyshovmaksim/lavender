<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    public function index()
    {
        return view('Products');
    }

    public function product()
    {
        return view('Product');
    }
}
