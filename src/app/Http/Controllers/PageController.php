<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

class PageController extends Controller
{
    public function Home(): View
    {
        return view('Home');
    }
}
