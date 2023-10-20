<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    
    public function log(){
        return view('curso/login');
    }

    public function reg(){
        return view('curso/register');
    }
    public function keep(){
        
    }
}
