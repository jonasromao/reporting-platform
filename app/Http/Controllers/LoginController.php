<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;

class LoginController extends Controller
{
    public function index(){

    return view('auth.login');
    }


    public function loginProcess(LoginRequest $request){

    // Validar dados do usuário

        try{

        $authenticaded = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

            // Verifica se o user foi antenticado
            if(!$authenticaded){

                return back()->withInput()->with('error', 'E-mail ou senha inválidos!');
            }

            // Rediciona se encontrar email e senha
                return redirect()->route('dashboard.index');

            }catch(Exception $e){
                return back()->withInput()->with('error', 'E-mail ou senha inválidos!');
        }

    }

    public function logout(){

    // Deslogar o usuário
    Auth::logout();

    // Redirecionar o usuário e enviar mensagem de sucesso
    return redirect()->route('login')->with('success', 'Deslogado com sucesso!');
    }
}
