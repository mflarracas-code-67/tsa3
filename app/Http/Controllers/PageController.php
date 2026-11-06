<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Display the About page.
     */
    public function about(): View
    {
        return view('about');
    }
}