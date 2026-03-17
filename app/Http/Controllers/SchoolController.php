<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index()
    {

    // Listar escolas
    return view('schools.index');
    }

    public function create()
    {
        // Apresentar formulário de cadastro
        
        
        return view('schools.create');
    }

    public function store(Request $request)
    {
        // Salvar registro no banco de dados
        //dd($request);
        School::create([
            'name' => $request->name,
            'user_id' => 1
        ]);   

        // Redirecionar o usuário, enviar mensagem de sucesso
        return redirect()->route('schools.index')->with('success', 'Escola cadastrada com sucesso!');
    }
}


