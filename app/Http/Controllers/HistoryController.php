<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function __construct()
    {
        session_start();

        if(!isset($_SESSION['logado'])){
            return redirect('login')->with('error', 'Erro ao fazer login');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function space()
    {
        $histories = History::where('category', 'space')->paginate(8);
        return view('admin.history.index', compact('histories'))->with('css', 'admin/history.css');
    }

    public function earth()
    {
        $histories = History::where('category', 'earth')->paginate(8);
        return view('admin.history.index', compact('histories'))->with('css', 'admin/history.css');
    }

    public function fantasy()
    {
        $histories = History::where('category', 'fantasy')->paginate(8);
        return view('admin.history.index', compact('histories'))->with('css', 'admin/history.css');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->all();

        $history = new History();

        $history::create($data);

        return redirect()->route('history.index')->with('success', 'História adicionada com sucesso!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function show(History $history)
    {
        //??
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function edit(History $history, Request $request)
    {
        $data = $request->all();

        $history->update($data);

        return redirect()->route('history.index')->with('success', 'História atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function delete(History $history)
    {
        $history->delete();

        return redirect()->route('history.index')->with('success', 'História removida com sucesso!');
    }
}
