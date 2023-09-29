<?php

namespace App\Http\Controllers;
use Cherry\LaraThumb\Facades\laraThumb;
use Illuminate\View\View;

class PageController extends Controller
{
    public function Home(): View
    {
        $res = laraThumb::src('/home');
        dd($res);
//        return view('Home', [
//
//        ]);
    }
}
