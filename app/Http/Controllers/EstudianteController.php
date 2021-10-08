<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
  //metodo index
    public function index()
    {
       
       $estudiantes = Estudiante::all();
       return $estudiantes;
    }

   
    public function create()
    {
        
    }

   //metodo store poara ingresar datos
    public function store(Request $request)
    {
        $estudiantes = Estudiante::created($request->all());
        return $estudiantes;
    }

   
    public function show(Estudiante $estudiante)
    {
        
    }

   
    public function edit(Estudiante $estudiante)
    {
        
    }

   
    public function update(Request $request, Estudiante $estudiante)
    {
        
    }

   
    public function destroy(Estudiante $estudiante)
    {
        
    }
}
