<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return view('site.home')->with('css', 'site/home.css');
    }

    public function histories()
    {
        return view('site.histories')->with('css', 'site/histories.css');
    }

    public function spaceIndex()
    {
        return view('');
    }

    public function fantasyIndex()
    {
        return view('');
    }
    
    public function earthIndex()
    {
        return view('');
    }
}
