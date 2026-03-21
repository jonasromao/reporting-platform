<?php

namespace App\Http\Controllers;

use App\Models\School;
use Exception;
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

    // visualizar a escola
    public function show (School $school)
    {
        // Carregar a view
        return view('schools.show', ['school' => $school]);
    }


    public function create()
    {
        // Apresentar formulário de cadastro
        
        
        return view('schools.create');
    }

    public function store(Request $request)
    {
        // Salvar registro no banco de dados
        
        try{
        $school = School::create([
            'name' => $request->name,
            'user_id' => 1
        ]);   

        // Redirecionar o usuário, enviar mensagem de sucesso
        return redirect()->route('schools.show', ['school' => $school->id])->with('success', 'Escola cadastrada com sucesso!');
        
        } catch(Exception $e){
            return back()->withInput()->with('error', 'Não foi possível cadastrar a escola');
        }
    }

    public function edit(School $school)
    {
        return view('schools.edit', ['school' => $school]);
    }

    public function update(Request $request, School $school)
    {
        try{
        $school->update([
            'name' => $request->name
        ]);

        return redirect()->route('schools.show', ['school' => $school->id])->with('success', 'Escola editada com sucesso!');
        
        } catch(Exception $e) {
            return back()->withInput()->with('error', 'Não foi possível editar a escola');
        }
    }

    public function destroy (School $school)
    {
        try{

        $school->delete();

        return redirect()->route('schools.index', ['school' => $school->id])->with('success', 'Escola apagada com sucesso!');

        } catch (Exception $e) {
        return back()->withInput()->with('error', 'Não foi possível apagar a escola!');
        }
    }
}