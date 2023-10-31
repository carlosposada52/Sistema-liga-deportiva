<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquiporandomsController extends Controller
{
    //
    public function mostrarEquipos(){
        $equipos = DB::table('tb_equipos')->get();
        return $equipos;
    }
   
}
