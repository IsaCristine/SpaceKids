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
        $histories = History::where('category', 'space')->paginate(8);
        return view('site.histories', compact('histories'))->with('css', 'site/histories.css');
    }

    public function fantasyIndex()
    {
        $histories = History::where('category', 'fantasy')->paginate(8);
        return view('site.histories', compact('histories'))->with('css', 'site/histories.css');
    }
    
    public function earthIndex()
    {
        $histories = History::where('category', 'earth')->paginate(8);
        return view('site.histories', compact('histories'))->with('css', 'site/histories.css');
    }

    public function history($id)
    {
        $history = History::find($id);
        return view('site.history', compact('history'))->with('css', 'site/history.css');
    }
}
