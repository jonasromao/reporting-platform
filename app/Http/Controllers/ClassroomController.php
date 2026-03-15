<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    // Listar classrooms
    public function index()
    {
        // Carregar a view
        return view('classroom.index');
    }


     // Carregar formulário para cadastro
    public function create()
    {
        // Carregar a view
        return view('classroom.create');
    }
    
}
