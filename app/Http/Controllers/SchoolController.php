<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index()
    {
        // Recuperar os registros no banco de dados
        $schools = School::orderBy('id', 'DESC')->get();

        // Carregar a view
        return view('schools.index', ['schools' => $schools]);
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


