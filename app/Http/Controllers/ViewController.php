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
    public function contact()
    {
        return view('site.contact')->with('css', 'site/contact.css');
    }

    public function login()
    {
        return view('site.login')->with('css', 'site/login.css');
    }

    public function adm()
    {
        return view('site.adm')->with('css', 'site/adm.css');
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
