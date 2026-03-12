<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Listar dashboard
    public function index() 
    {
       // Carregar view
       return view('dashboard.index');  
    }
}
