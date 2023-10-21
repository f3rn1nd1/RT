<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    
    public function log(){
        return view('curso/login');
    }

    public function reg(){
        return view('curso/register');
    }
    public function keep( Request $request){
        $candidate = new Candidate();

        
        $candidate->rut = $request->rut;
        $candidate->dv = $request->dv;  
        $candidate->nombre = $request->nombre; 
        $candidate->apellido_paterno = $request->apellido_paterno; 
        $candidate->apellido_materno = $request->apellido_materno; 
        $candidate->direccion = $request->direccion;
        $candidate->email = $request->email;  
        $candidate->password = bcrypt($request->password);

        $candidate->save();

        
       


        
    }
}
