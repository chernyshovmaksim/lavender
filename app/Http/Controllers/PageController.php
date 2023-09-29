<?php

namespace App\Http\Controllers;

use Cherry\LaraThumb\Facades\laraThumb;
use Illuminate\View\View;

class PageController extends Controller
{
    public function Home(): View
    {
        $img = laraThumb::src('/assets/img/bouquet-1.webp', [
            'w' => 100,
            'h' => 100,
            'zc' => 1
        ]);
        return view('Home', [
            'img' => $img
        ]);
    }
}
