<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
 
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function mostrarEquipos(){
       
    }
    public function index()
    {
        $equipos = DB::table('tb_equipos')->get();
        return view('pages.dashboard',array('equipos'=>$equipos));
        
    }

   
}
