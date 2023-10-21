<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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
        return redirect()->route('home.__invoke');
    }
    public function login(Request $request) 
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('cursos.index');
        }
    
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }
    public function logout(Request $request) 
    {
        Auth::logout();

        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('home.__invoke');
    }
}
