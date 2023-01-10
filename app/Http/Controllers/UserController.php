<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\contracts\Pagination\Paginator;

class UserController extends Controller
{
    public function __construct()
    {
        session_start();

        if(!isset($_SESSION['logado'])){
            return redirect('login')->with('error', 'Erro ao fazer login');
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard')->with('css', 'admin/dashboard.css');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->search){
            $users = User::where('name', 'like', '%'.$request->search.'%')->paginate(10);
            return view('admin.users.index', compact('users'))->with('css', 'admin/users.css');
        }
        else{
            $users = User::paginate(10);
            return view('admin.users.index', compact('users'))->with('css', 'admin/users.css');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->all();

        $user = new User();

        $user::create($data);

        return redirect()->route('user.index')->with('success', 'Usuário criado com sucesso!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Request $request)
    {
        $data = $request->all();

        $user->update($data);

        return redirect()->route('user.index')->with('success', 'Usuário editado com sucesso!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function delete(User $user)
    {
        $user->delete();

        return redirect()->route('user.index')->with('success', 'Usuário deletado com sucesso!');
    }
}
