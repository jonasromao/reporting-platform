<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    
    // Página inicial do administrativo

    public function index(){

    return view('dashboard.index');
    }
}
