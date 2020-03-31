<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view("StaticPages/home");
    }

    public function about()
    {
        return view("StaticPages/about");
    }

    public function help()
    {
        return view("StaticPages/help");
    }
}
