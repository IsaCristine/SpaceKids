<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        session_start();
    }

    public function index()
    {
        if(!empty($_SESSION['logado']))
        {
            return redirect('admin/users');
        }    

        return view('login')->with('css', 'site/login.css');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$credentials['email'] || !$credentials['password']) {
            $_SESSION['loginInvalido'] = "Erro ao fazer login";

            return redirect('login')->with('error', 'Erro ao fazer login');
        }

        $user = User::where('email', $credentials['email'])->first();

        if(!$user){
            $_SESSION['loginInvalido'] = "Erro ao fazer login";

            return redirect('login')->with('error', 'Erro ao fazer login');
        }

        if(strcmp($user->password, $credentials['password'])){
            $_SESSION['loginInvalido'] = "Erro ao fazer login";

            return redirect('login')->with('error', 'Erro ao fazer login');
        }

        $_SESSION['logado'] = true;
    
        return redirect('admin/users');
    }

    public function logout(Request $request)
    {
        $_SESSION['logado'] = false;
        session_destroy();

        return redirect('/');
    }
}
