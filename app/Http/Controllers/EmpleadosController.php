<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function empleados(){
        //$empleados = \DB::table('empleados')->select('id','nombre')->get();
        $empleados = Empleado::All();
        return $empleados;
    }
}
