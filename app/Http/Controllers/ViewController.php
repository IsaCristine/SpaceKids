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

    public function histories()
    {
        $histories = History::paginate(8);
        return view('site.histories', compact('histories'))->with('css', 'site/histories.css');
    }

    public function spaceIndex()
    {
        $histories = History::paginate(8)->where('category', 'space');
        return view('', compact('histories'))->with('css', 'site/history.css');
    }

    public function fantasyIndex()
    {
        $histories = History::paginate(8)->where('category', 'fantasy');
        return view('', compact('histories'))->with('css', 'site/history.css');
    }
    
    public function earthIndex()
    {
        $histories = History::paginate(8)->where('category', 'earth');
        return view('', compact('histories'))->with('css', 'site/history.css');
    }
}
