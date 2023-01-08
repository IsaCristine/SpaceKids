<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return view('site.home')->with('css', 'site/home.css');
    }

    public function spaceIndex()
    {
        $histories = History::all()->where('category', 'space');
        return view('', compact('histories'))->with('css', 'site/history.css');
    }

    public function fantasyIndex()
    {
        $histories = History::all()->where('category', 'fantasy');
        return view('', compact('histories'))->with('css', 'site/history.css');
    }
    
    public function earthIndex()
    {
        $histories = History::all()->where('category', 'earth');
        return view('', compact('histories'))->with('css', 'site/history.css');
    }
}
