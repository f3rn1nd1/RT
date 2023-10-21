<?php

namespace App\Http\Controllers;
use App\Models\Study;
use App\Models\Experience;
use App\Models\Language;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view('curso/pro');
    }
    public function la(){
        return view('curso/can');
    }
    public function adquisicion(Request $request){
        $study = new Study();
        
        $study->titulo = $request->titulo;
        $study->tipo_estudio = $request->tipo_estudio;
        $study->universidad = $request->universidad;
        $study->fecha_obtencion = $request->fecha_obtencion;
        
        $study->save();
        return redirect()->route('cursos.index');
    }
    public function exp(Request $request){
        $experience = new Experience(); 

        $experience->razon_social = $request->razon_social;
        $experience->puesto = $request->puesto;
        $experience->f_inicio = $request->f_inicio;
        $experience->f_fin = $request->f_fin;
        $experience->nivel_experiencia = $request->experiencia;

        $experience->save();

    }
    public function lan(Request $request){
        $language = new Language();

        $language->idioma = $request->idioma;
        $language->nivel_escrito = $request->nivel_escrito;
        $language->nivel_oral = $request->nivel_oral;
    }


}
